pipeline {
    agent {
        // Menggunakan image composer yang sudah lengkap dengan PHP & Composer
        docker { 
            image 'composer:latest' 
        }
    }

    stages {
        stage('Ambil Kode') {
            steps {
                // Mengambil kode terbaru dari GitHub
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                // Menginstal library Laravel
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Setup Environment') {
            steps {
                // Menyiapkan file .env dan generate key
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }

        stage('Database Migration') {
            steps {
                // Menjalankan migrasi database
                // Catatan: Ini akan berhasil jika kamu sudah setting DB di .env
                sh 'php artisan migrate --force'
            }
        }

        stage('Selesai') {
            steps {
                sh 'php -v'
                echo 'Mantap Felix! Build Berhasil dan Proyek Laravel kamu aman.'
            }
        }
    }
}