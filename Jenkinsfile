pipeline {
    agent any

    stages {
        stage('Ambil Kode') {
            steps {
                checkout scm
            }
        }

        stage('Persiapkan Composer') {
            steps {
                // Mendownload composer secara manual di dalam folder project
                sh 'curl -sS https://getcomposer.org/installer | php'
            }
        }

        stage('Install Dependencies') {
            steps {
                // Menjalankan composer yang baru didownload tadi (composer.phar)
                sh 'php composer.phar install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Setup Environment') {
            steps {
                sh 'cp .env.example .env'
                // Ganti DB_HOST ke IP laptopmu (sesuaikan dengan hasil ipconfig tadi)
                // Contoh: sh "sed -i 's/DB_HOST=127.0.0.1/DB_HOST=192.168.1.15/g' .env"
                sh 'php artisan key:generate'
            }
        }

        stage('Selesai') {
            steps {
                echo 'Mantap Felix! Akhirnya berhasil tanpa perlu plugin Docker.'
            }
        }
    }
}