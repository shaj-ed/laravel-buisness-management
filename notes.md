## Category table schema

- id
- name (string, required)
- slug (string, required, unique)
- description (text, nullable)
- status (boolean)
- timestamps (created_at, updated_at)

### Generate the migration + model together

`php artisan make:model Category -m`

# Migration commad

`php artisan migrate`
