# The test task for PHP Junior Developer: Develop a book inventory system

Develop a basic book inventory system using Laravel along with the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Livewire) and integrate the Filament admin panel.

## Project Requirements

1. **Book Model**: Design a `Book` model with the following attributes: `id`, `title`, `author`, `publication_year`, `publisher`, `isbn`.

2. **User and Admin Roles**: Implement a simple user authentication system with role-based access control. Users with the `Admin` role should have access to the Filament admin panel for managing books, while users with the `User` role should only be able to view the list of books.

3. **List Page for Users**: Develop a page accessible to `User` roles that displays all the books in the inventory. Each book entry should include details such as `title`, `author`, `publication_year`, `publisher`, and `isbn`.

4. **Filament Admin Panel**: Enable CRUD operations (`Create`, `Read`, `Update`, `Delete`) for managing books through the Filament admin panel.

5. **Authorization**: Ensure that only users with the `Admin` role can perform actions such as creating, updating, or deleting books. Users with the `User` role should only have permission to view the list of books.
