pipeline {
    agent any

    stages {
        stage('Install System Tools') {
            steps {
                // Kita update linux di dalam Jenkins dan install PHP
                sh 'apt-get update && apt-get install -y php-cli php-curl php-xml php-mbstring unzip'
            }
        }

        stage('Persiapkan Composer') {
            steps {
                sh 'curl -sS https://getcomposer.org/installer | php'
            }
        }

        stage('Install Dependencies') {
            steps {
                // Tambahkan flag --ignore-platform-reqs agar tidak protes soal versi PHP 8.4
                sh 'php composer.phar install --no-interaction --prefer-dist --optimize-autoloader --ignore-platform-reqs'
            }
        }

        stage('Setup Environment') {
            steps {
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }

        stage('Selesai') {
            steps {
                echo 'Mantap Felix! PHP sudah terpasang dan Laravel sudah siap.'
            }
        }
    }
}