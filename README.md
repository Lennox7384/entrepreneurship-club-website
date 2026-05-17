# Entrepreneurship Club Website

A full-stack PHP/MySQL website built for a real student-run organization: the Concordia College Entrepreneurship Club at the Offutt School of Business. The site is the club's public face plus a back-of-house admin panel for managing members, events, and an interactive weekly schedule.

## What it does

**Public-facing pages**
- Home with the two next upcoming events pulled live from the database
- About page introducing the club's mission, members, and partners
- Contact form with server-side validation and email forwarding
- Members directory with sortable display
- Interactive weekly schedule (PHP-driven, with a separate static prototype in `schedule01.html`)

**Admin panel** (behind login)
- Add / edit / delete events
- Add / edit / delete / reorder members
- Admin sign-up with hashed-password authentication and session timeout
- Bulk event insertion via `insertEvents.php`

## Stack

PHP, MySQL (via `mysqli` and PDO), vanilla HTML/CSS/JavaScript, Bootstrap Icons, AOS for scroll animations. No framework dependency.

## Layout

```
entrepreneurship-club-website/
  index.php             # home + upcoming events
  about.php             # club mission
  contact.php           # contact form (POSTs to send_email.php)
  members.php           # members directory
  schedule.php          # interactive weekly schedule
  login.php             # admin login
  adminEvent.php        # admin event panel landing
  adminEventAdd/Edit/AddHandler/EditHandler.php   # event CRUD
  deleteEvent.php / deleteEvents.php / deleteAllEvents.php   # event deletion
  addMember.php / editMembers.php / deleteMember.php / updateMember.php   # member CRUD
  adminSignUp.php       # new-admin registration
  saveOrder.php         # drag-and-drop member ordering
  send_email.php        # contact form handler
  scheduleRetrieveal.php   # JSON endpoint for the schedule
  db_config.php         # environment-driven DB config (no secrets in source)
  css/ js/ img/ scheduleIcons/ scheduleMEDIA/   # assets
  footer.php / header.php / enable-js.php       # shared partials
  docs/screenshots/     # placeholder for site screenshots
```

## Setup

To run locally with XAMPP, MAMP, or any LAMP stack:

1. Clone this repo into your local web root (e.g., `htdocs/`).
2. Create a MySQL database and import your schema. The project expects an `events` table with columns `event_title`, `event_date`, `event_time`, `event_type`, `event_desc`, `event_detailed_desc`, `event_img`, plus a `members` table.
3. Copy `.env.example` to `.env` and fill in the DB credentials, or export the same variables in the shell before starting Apache:
   ```bash
   export DB_HOST=localhost
   export DB_USER=root
   export DB_PASSWORD=your-password
   export DB_NAME=ClubDatabase
   ```
4. Start Apache + MySQL.
5. Open `http://localhost/entrepreneurship-club-website/` in a browser.

## Team

Built with the PixelPioneers team for the Entrepreneurship Club at the Offutt School of Business, Concordia College.

## License

Apache 2.0. See `LICENSE`.
