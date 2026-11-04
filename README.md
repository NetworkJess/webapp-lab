# Web App Lab

My web development lab work, one folder per lab.

## Labs

- **Lab 3 - ClientSide** — client-side JavaScript:
  - `login.html` — login screen with validation (Task 1)
  - `date.html` / `date.php` — client-side vs server-side date & time (Task 2)
  - `registration.html` — registration form with validation (Task 3)
  - `SmartPhones/` — Whirling Image Game: images spin on hover, stop on click (Task 4)

- **Lab 4 - ServerSide** — server-side PHP and SQL injection:
  - `docker-compose.yml` / `php/Dockerfile` — Apache + PHP 8.4 + MySQL app stack
  - `Spies/` — supplied `Spies.html` / `spies.php` spy-name generator
  - `Users/` — login app demonstrating SQL injection:
    - `index.html` — landing page linking all three examples
    - `example1.html` → `simlogin1.php` — single-query login bypass (`or 'x'='x`)
    - `example2.html` → `simlogin2.php` — piggy-backed query (`drop table`)
    - `example3.html` → `simlogin3.php` — UNION query (dump table)
    - `Simlogin.php` — original un-adapted lab file (reference)