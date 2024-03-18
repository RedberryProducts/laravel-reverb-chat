# Laravel Reverb Chat Application

Welcome to the Laravel Reverb Chat application repository. This project is a real-time chat application built with Laravel, leveraging Laravel Reverb for broadcasting events. It demonstrates the implementation of real-time bi-directional communication between clients and servers.

## Features

- Real-time messaging between users.
- Predefined chat rooms.
- Broadcasts new messages to all connected clients in real-time.

## Installation

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js and npm

### Setup

1. Clone the repository to your local machine:
   ```bash
   git clone git@github.com:RedberryProducts/laravel-reverb-chat.git
   ```
   
2. Install PHP dependencies:
    ```
    composer install
    ```
3. Install JavaScript dependencies:
    ```
    npm install
    ```
4. Copy the example environment file and make the required configuration adjustments:
    ```
    cp .env.example .env
    ```
5. Generate an application key:
    ```
    php artisan key:generate
    ```
6. Start the Laravel development server:
    ```
    php artisan serve
    ```
7. Start queue:
    ```
    php artisan queue:listen
    ```
8. Start reverb:
    ```
    php artisan reverb:start
    ```
9. In a new terminal, start the frontend assets compilation process:
    ```
    npm run dev
    ```


## Usage
After installation, access the application via http://localhost:8000 (or the port provided by php artisan serve). You can navigate through the predefined chat rooms and start sending messages in real-time.


## License
This project is licensed under the MIT License - see the LICENSE.md file for details.

## Acknowledgments
Laravel, for the incredible PHP framework.
Laravel Echo and Pusher, for making real-time broadcasting a breeze.


Thank you for checking out our project. We hope it serves as a useful starting point for your real-time chat applications!


This README provides a comprehensive guide for anyone looking to understand, install, use, or contribute to the project. You can adjust the URLs, project details, and features according to the specifics of your Laravel Reverb Chat application.
