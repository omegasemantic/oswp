# Provisional Workflow — Compressed jq + PHP Page Generation

Status: provisional, expected to be refined as we go. This sits
alongside `howto-jq-to-wp-page.md` (the full manual 8-step version) —
this document describes the shortcut version for routine requests.

## The compressed workflow, from the user's side

A request like "build me a featured-events page, ordered by
feature_priority, only if is_featured is true" should be enough to get
a complete, ready-to-run result — no need to separately ask for the jq
filter first, then the PHP second.

**What comes back, in one response:**
1. The jq filter used to design the selection (shown, so it can be
   re-run against `events-schema-cli.sh` independently as a sanity
   check if wanted).
2. A complete `page-{slug}.php` file, ready to paste and run as a
   `docker exec` heredoc, or as a payload for `make-page.sh`.
3. The two-line `wp post create` command to register the page, if not
   already registered.

**What still requires the user to act, every time:**
- Actually running the jq filter against real data and confirming the
  selection looks right.
- Loading the resulting page in browser and checking the output --
  especially anything involving date parsing, string formatting, or
  derived/calculated values (the `strtotime()` bug from 26 July is the
  concrete cautionary example: logic that looked correct broke silently
  against real ambiguous-format data, only caught by actually looking
  at output).
- Flagging back anything that looks wrong, so it can be fixed in one
  iteration rather than compounding across multiple pages.

## Self-briefing (for maintaining consistency across sessions/requests)

When a request of this shape comes in ("build me a page that shows X
where Y"), the default process should be:

1. **Identify which existing fields the request maps to** -- check
   against the known schema (plain ACF fields via `get_fields()`, the
   three taxonomy fields via `wp_get_post_terms()`, native fields like
   title/content/featured image). Don't assume a field exists --
   reference what's actually been confirmed in this project's schema so
   far.

2. **Draft the jq filter first, even if not asked for separately** --
   this is the cheap, fast way to state the selection logic precisely,
   and it doubles as documentation of intent. Show it in the response
   even when the main deliverable is the PHP page.

3. **Reuse `oswp_get_event_record()` and `oswp_short_date()` (and any
   other shared helpers already in `functions.php`) rather than
   re-deriving field-resolution logic inline** -- the DRY refactor done
   on 25 July exists specifically so every new page draws from the same
   proven source. Don't regress to inline `get_fields()` +
   `wp_get_post_terms()` duplication.

4. **Apply the established conventions without being asked each time:**
   - `field-{schema_key}` CSS classes on any field-level output
     (matches the JSON dump's own vocabulary, established 25 July).
   - PHP renders "full noise" -- no `if (empty())` guards hiding markup;
     visibility is CSS's job (`.is-hidden` / `oswp_hide_if_empty()`),
     established 25 July, confirmed as a lasting principle.
   - Dates parsed via `DateTime::createFromFormat('d/m/Y g:i a', ...)`,
     never bare `strtotime()`, given the confirmed format-ambiguity bug.
   - `esc_html()` / `esc_url()` on all dynamic output, consistently.
   - `.event-content-wrap`-style wrapping div (max-width + margin auto)
     for any new page's main content area, matching the established
     visual pattern from `single-event.php`, unless told otherwise.

5. **Flag, rather than silently assume, anything genuinely ambiguous
   about scope** -- e.g. the `featured` page's date-filtering question
   from 26 July (filter by date or not?) needed asking, not guessing.
   One clarifying question is fine; don't build speculative branches for
   unstated requirements.

6. **Hand back a complete file, not a partial sketch**, once scope is
   clear -- per the user's stated preference for compressed requests,
   avoid making them assemble multiple partial responses into a working
   whole.

## What this workflow deliberately does NOT change

- Every page still needs the two-stage file + page-record process --
  compressing the *generation* doesn't remove the underlying WordPress
  mechanism requiring both.
- The user's own verification step (running jq, loading the page) is
  not optional or skippable, even when the draft arrives complete --
  this workflow speeds up drafting, not verification.
- Genuinely new/unfamiliar schema territory (a field never used before,
  a data shape not yet seen in `events-schema-cli.sh`'s output) still
  warrants slowing down to the full manual howto process rather than
  assuming the compressed version's confidence is warranted.

## Expected refinement over time

This document should be updated as patterns solidify or as mistakes
surface -- e.g. if a particular kind of drafted page consistently needs
the same correction, that correction should get folded into the
self-briefing checklist above, the same way the `strtotime()` fix and
the `field-*` class convention were folded in from earlier sessions.
