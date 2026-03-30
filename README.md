# WebAshaProject - Django Full Stack E-Learning Platform

## 🚀 Quick Start (Synchronized Dev Setup)

Follow these **exact steps** after `git clone` to get identical DB data & running app for all developers.

### 1. Prerequisites
- Python 3.10+
- Git
- VSCode recommended

### 2. Clone & Virtual Env
```bash
git clone <repo-url>
cd WebAshaProject
python -m venv venv
# Windows:
venv\\Scripts\\activate
# Linux/Mac:
source venv/bin/activate
```

### 3. Install Dependencies
```bash
pip install -r requirements.txt  # If exists, else:
pip install django pillow stripe  # Core deps (add to reqs.txt)
```

### 4. Git Ignore Check (Do NOT commit these!)
Update `.gitignore` if missing:
```
# Env/DB
venv/
__pycache__/
*.pyc
*.pyo
*.pyd
.Python
env/
env.bak/
pip-log.txt
pip-delete-this-directory.txt
.tox/
.mrdeveloper/
.coverage
.coverage.*
.cache
nosetests.xml
coverage.xml
*.cover
.htmlcover
.hypothesis/
.DS_Store
.env
*.log
db.sqlite3  # Local DB changes!
db.sqlite3-journal
media/  # User uploads, keep empty for sync
staticfiles/
!.gitignore

# IDE
.vscode/settings.json
.idea/
```

### 5. Django Setup & Migrations
```bash
python manage.py makemigrations
python manage.py migrate
python manage.py collectstatic --noinput
```

### 6. Create Superuser (One-time)
```bash
python manage.py createsuperuser
# Use: admin / admin@webasha.com / password123
```

### 7. **Seed DB Data (Synchronized for ALL Devs!)**
```bash
python manage.py seed_data
```
- Loads fixtures: 3 TeamMembers, 3 LiveCourses, 3+ Courses.
- **Idempotent**: Safe to re-run, skips if data exists.
- Verify: `python manage.py shell` → `from mainApp.models import *; print(TeamMember.objects.count())  # 3`

### 8. Run Server
```bash
python manage.py runserver
```
- Visit: http://127.0.0.1:8000/
- Admin: http://127.0.0.1:8000/admin/

## 📋 Project Structure
```
├── mainApp/          # Django app
│   ├── fixtures/     # Sample data JSONs ⭐
│   ├── management/commands/seed_data.py  # Magic seeder ⭐
│   ├── models.py     # Course, Profile, TeamMember, etc.
│   └── ...
├── WebAshaProject/   # Settings
├── media/            # Course/team images (gitignored uploads)
├── TODO.md           # Seeding status
└── README.md         # This!
```

## 🔄 Sync Data Across Devs
1. Commit **fixtures/** & **seed_data.py** to Git.
2. **NEVER** commit `db.sqlite3` or `media/` uploads.
3. All devs run `seed_data` → **Identical tables/data**.

## 🛠️ Common Commands
| Command | Purpose |
|---------|---------|
| `python manage.py seed_data` | Load sample data |
| `python manage.py createsuperuser` | Admin user |
| `python manage.py makemigrations && migrate` | DB schema |
| `python manage.py collectstatic` | CSS/JS |
| `python manage.py runserver` | Dev server |

## 📈 Current Sample Data (Post-seed)
- **Courses**: 5 (incl. Python, K8s, RHCSA)
- **TeamMembers**: 3 (Satyendra, Asha, Raj)
- **LiveCourses**: 3 batches (DevOps, CEH, AWS)

## Issues?
- Check TODO.md
- Delete `db.sqlite3` → Re-migrate + seed
- Missing images? Media has samples.

Happy coding! 🎓✨
