pipeline {
    agent any

    stages {
        stage('Ambil Kode') {
            steps {
                // Jenkins mengambil kode terbaru dari GitHub
                checkout scm
            }
        }

        stage('Install Dependencies') {
            steps {
                // Menjalankan composer install tanpa mengganggu folder vendor asli
                // Karena Jenkins di Docker, kita asumsikan PHP & Composer sudah ada di sana
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Setup Environment') {
            steps {
                // Menyalin file .env.example jadi .env untuk testing
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }

        stage('Database Migration') {
            steps {
                // Menjalankan migrasi database
                sh 'php artisan migrate --force'
            }
        }

        stage('Selesai') {
            steps {
                echo 'Build Berhasil! Proyek Laravel kamu aman.'
            }
        }
    }
}