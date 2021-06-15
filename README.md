
## About Assignment

The assignment was pretty straight forward. Was easy to implement and work on. Following are the key aspects you should consider while evaluating the assignment
- Minimum or no styling has been done.
- Only focussed on the functional aspect.
- All core functions defined in assignment have been completed.
- No auth has been implemented (as advised in assignment).
- used `https://trial.craig.mtcserver15.com/api/properties` instead of `http://trialapi.craig.mtcdevserver.com/api/properties` as the latter redirected to the previous one.
- No API key used as i was able to get response without it.

## Environment
- php 7.4
- Laravel 8
- Mysql 8
- Inbuilt dev server

## Libraries / templates
- No external libraries
- used homer template assets (at some places)
- used bootstrap (Mostly)

## How to use
- pull main branch from github
- install dependencies by running `composer install`
- copy example env to env `cp .env.example .env`
- generate app key `php artisan key:generate`
- create a database named `assignment` or something else
- Add your DB creds to .env
- run migrations `php artisan migrate`
- start the inbuilt dev server `php artisan serve`
- That is all

## What has been done
- A script to get 30 properties from API and then store them in DB
- A table view to view all the properties in system.
- An edit page to edit the properties in system

## Main Functionality
- start inbuilt dev server `php artisan serve`
- head over to homepage `127.0.0.1:8000`
- here you can store / update the properties from API to system by clicking the button.
- There is also a command to do the same `php artsan properties:get`
- This will either insert or update (if already exists) the properties to the system
- There is an admin side (without any auth)
- head over to admin dashboard `127.0.0.1:8000/admin`
- On the dashboard (no styling), there is a table with records of properties in system
- You can sort them, search in them, and use pagination to go across pages
- There are also two action buttons on each row one to edit and one to delete a row.
- clicking on the edit button will take you to the edit screen where you can edit the property
- clicking on the delete icon will delete the row.

## Improvements that can be made
- Auth can be implemented
- A proper design / template can be used
- Proper guards for frontend and admin side can be used
- API can be implemented to fetch different page / size by passing parameters
- Bulk insert can be used to insert / update
- Eloquent Relations can be used
- proper AJAX can be used to improve UX
- Thumbnail can be shown on edit page once uploaded
- repositories can be used to separate logic
- many more

## What has not been done / was unclear
- Only HTML5 validation has been used.. JQuery for client side and Laravel `Validator` for serverside validation can be used.
- "These properties should appear in the property search" - it was not clear in which search.. However in datatable search they are searchable.
- "not be affected when the database is updated with the properties from the api." - Was not clear if you meant all fields or only the custom fields in edit like `postal code`, `image`.

## Main aspects
- Used standard Laravel structure
- Most code in Http, Commands, Models, Views folders
