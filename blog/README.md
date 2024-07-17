# Personal Blog Project

This is a personal blog application built using Laravel 11. The application supports user authentication, CRUD operations for posts, image uploads, categories, tags, and comment management. Additionally, the application uses various libraries for extended functionality such as HTML form helpers, HTML purification, and image manipulation.

## Features

- User authentication with Laravel Breeze.
- CRUD operations for blog posts.
- Image upload and resizing with Intervention Image.
- Purify HTML content using stevebauman/purify.
- Category and tag management.
- Comment management.
- Pagination and search functionality.
- Responsive UI with Bootstrap.

## Libraries and Tools

- **Laravel Framework**: ^11.9
- **PHP**: ^8.2
- **Intervention Image**: ^3.7
- **Spatie Laravel HTML**: ^3.9
- **Stevebauman Purify**: ^6.2
- **Laravel Tinker**: ^2.9
- **Laravel Breeze**: ^2.1 (for user authentication scaffolding)
- **FakerPHP**: ^1.23 (for generating fake data)
- **PHPUnit**: ^11.0.1 (for testing)
- **Laravel Sail**: ^1.26 (for local development environment)
- **Laravel Pint**: ^1.13 (for code styling)
- **Mockery**: ^1.6 (for mocking in tests)
- **Nunomaduro Collision**: ^8.0 (for error handling in console)

## Installation

### Prerequisites

- PHP ^8.2
- Composer 2.7.7
- Node.js and npm (for front-end dependencies)

### Steps

1. Clone the repository:

    ```bash
    git clone https://github.com/your-username/your-repo.git
    cd your-repo
    ```

2. Install PHP dependencies:

    ```bash
    composer install
    ```

3. Install JavaScript dependencies:

    ```bash
    npm install
    ```

4. Copy the `.env.example` file to `.env` and configure your environment variables:

    ```bash
    cp .env.example .env
    ```

5. Generate an application key:

    ```bash
    php artisan key:generate
    ```

6. Run database migrations:

    ```bash
    php artisan migrate
    ```

7. (Optional) Seed the database:

    ```bash
    php artisan db:seed
    ```

8. Run the development server:

    ```bash
    php artisan serve
    ```

## Usage

### Authentication

The application uses Laravel Breeze for authentication. You can register a new user, log in, and logout.

### Posts

Users can create, edit, delete, and view blog posts. Each post can have a category, multiple tags, and comments. Users can only edit or delete their own posts.

### Categories and Tags

Posts can be categorized and tagged. Users can manage categories and tags through dedicated CRUD interfaces.

### Comments

Authenticated users can leave comments on posts. Each comment is associated with a mock-user (don't have to log in) and a post.

### Image Upload

When creating or editing posts, users can upload an image. The image is resized using the Intervention Image library and stored in the `public/images` directory.

### HTML Purification

User input is purified using the `stevebauman/purify` library to prevent XSS attacks.

### Pagination and Filtering

Posts are paginated.

## Configuration

### Environment Variables

- **APP_NAME**: The name of the application.
- **APP_ENV**: The application environment (local, production, etc.).
- **APP_DEBUG**: Enable or disable debug mode.
- **APP_URL**: The base URL of the application.
- **DB_CONNECTION**: The database connection type (e.g., mysql).
- **DB_HOST**: The database host.
- **DB_PORT**: The database port.
- **DB_DATABASE**: The database name.
- **DB_USERNAME**: The database username.
- **DB_PASSWORD**: The database password.
- **MAIL_MAILER**: The mail driver (e.g., smtp).
- **MAIL_HOST**: The mail host.
- **MAIL_PORT**: The mail port.
- **MAIL_USERNAME**: The mail username.
- **MAIL_PASSWORD**: The mail password.
- **MAIL_ENCRYPTION**: The mail encryption method (tls or ssl).
- **MAIL_FROM_ADDRESS**: The email address for outgoing emails.
- **MAIL_FROM_NAME**: The name for outgoing emails.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request.

