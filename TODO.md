# TODO

## Step 1: Understand failure location
- [x] Identify that IntegrityError is from Profile OneToOneField uniqueness on `user_id`
- [x] Locate the exact code path: `mainApp/views.py` `register_view`

## Step 2: Implement fix
- [ ] Update `register_view` to create profile idempotently using `Profile.objects.get_or_create(user=user, defaults={...})`
- [ ] (Recommended) Wrap user+profile creation in a transaction for safety
- [ ] Ensure email/login cart merge still works correctly

## Step 3: Verify
- [ ] Run Django server and retry `/register/` with same data
- [ ] Confirm no IntegrityError and registration succeeds

