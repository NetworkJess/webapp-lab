# Web App Lab — Lab 4: Server-Side PHP & SQL Injection

Server-side PHP work plus three SQL injection demonstrations, run in Docker.

## Structure

- **`Spies/`** — supplied lab files: `Spies.html` (MI5 recruitment form) and `spies.php` (server-side spy-name generator). Sourced from the lab sheet; not used by the running app.
- **`Users/`** — the SQL injection login app (the container webroot):
  - `index.html` — landing page linking all three examples
  - `example1.html` → `simlogin1.php` — Example 1: single query
  - `example2.html` → `simlogin2.php` — Example 2: piggy-backed query (`mysqli_multi_query`)
  - `example3.html` → `simlogin3.php` — Example 3: UNION query
  - `Simlogin.php` / `login.html` — original un-adapted lab files (reference)
- **`php/Dockerfile`** — Apache + PHP 8.4 with `mysqli`/`pdo` extensions
- **`docker-compose.yml`** — `web` (Apache/PHP), `db` (MySQL), and `phpmyadmin` services

## Run it

```bash
docker compose up -d
```

- Web app: http://127.0.0.1:8000
- phpMyAdmin: http://127.0.0.1:8080

The login app expects a `my_db` database with a `persons` table (4 columns:
`Name`, `username`, `password`, `email` as primary key) and a `student` table
for Example 2.

## SQL injection examples

Each example is an insecure query built by gluing user input into the SQL
string (see `Users/simlogin1.php`). The `echo $sql` line prints the exact query
being executed.

- **Example 1** — password `test' or 'x'='x` makes the WHERE clause always
  true, logging in as any user.
- **Example 2** — password `test' ; drop table student;` piggy-backs a second
  destructive statement onto the query and drops the `student` table.
- **Example 3** — username `' UNION Select * from persons; --` appends a UNION
  query that dumps the whole `persons` table.

The `simlogin*.php` files have been adapted from the lab sheet to connect to the
Docker MySQL container (`host=db`, user `Jess`, password `admin`, db `my_db`);
the original un-adapted `Simlogin.php` is kept for comparison.