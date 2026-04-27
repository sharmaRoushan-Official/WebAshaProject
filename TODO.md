# Course Purchase + Lecture Video Fix

**Purchase**: ✅ cart.html JS fixed, checkout now works (native POST → my-courses redirect)

**Video Issue**: /course/2/lecture/1/ → Error 153 (no chapters/lectures data)

**Steps**:
- [x] 1. Plan + TODO.md
- [x] 2. Fix cart.html purchase JS ✅
- [x] 3. Fix cart.html remove JS ✅
- [x] 4. Create lectures.json fixture ✅
- [ ] 5. Run `python manage.py loaddata mainApp/fixtures/lectures.json`
- [ ] 6. Test /course/2/lecture/1/ video embed
- [ ] 7. Complete ✓

**Next command**: `python manage.py loaddata mainApp/fixtures/lectures.json`

**Backend**: Fully functional (demo checkout works).
**Issue**: cart.html JS prevents form submission/redirect.

**Next**: Edit cart.html
