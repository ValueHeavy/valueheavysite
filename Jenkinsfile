pipeline {
    agent any
    stages {
        stage("Build") {
            environment {
                DB_HOST = credentials("laravel-valueheavy-host")
                DB_DATABASE = credentials("laravel-valueheavy-database")
                DB_USERNAME = credentials("laravel-valueheavy-user")
                DB_PASSWORD = credentials("laravel-valueheavy-password")
            }
            steps {
                sh 'php --version'
                sh 'composer install'
                sh 'composer --version'
                sh 'cp .env.example .env'
                sh 'echo DB_HOST=${DB_HOST} >> .env'
                sh 'echo DB_USERNAME=${DB_USERNAME} >> .env'
                sh 'echo DB_DATABASE=${DB_DATABASE} >> .env'
                sh 'echo DB_PASSWORD=${DB_PASSWORD} >> .env'
                sh 'php artisan key:generate'
                sh 'cp .env .env.testing'
                sh 'php artisan migrate'
                sh 'chmod -R 775 ./bootstrap/cache'
                sh 'chmod -R 775 ./storage'
            }
        }
    }
}
