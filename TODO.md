# TODO: Update Seeders to Match Table Data

## Tasks
- [x] Update ServiceSeeder.php to include both records from the Service table (id:1 and id:2)
- [x] Update GallerySeeder.php to match the single record in the Gallery table (id:1)
- [x] Test the updated seeders by running `php artisan db:seed` to ensure correct data population
- [x] Optionally, uncomment GallerySeeder in DatabaseSeeder.php if seeding galleries is desired

## Notes
- AboutUsSeeder and TestimonialSeeder already match table data, no changes needed.
- ContactSeeder was created and updated with description column as per user request.
- ServiceSeeder now includes both records from the table.
- GallerySeeder updated to match the single table record.
- GallerySeeder commented out in DatabaseSeeder to avoid conflicts.
