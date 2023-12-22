<h1 align="center">ChickMed - Chicken Disease Detection</h1>
<h2>🔭 Project Brief</h2>

#### We created an Android application that provides information about diseases suffered by the chicken. This application will provide recommendations on how to deal with the disease. We will use the image detection method to detect the disease suffered by chickens based on their feces.

## 🤖 Machine Learning Team

### Has several responsibility such as:

1. Cases Research
2. Data Collection & Exploration
3. Data Preparation
4. Modeling Experiment
5. Deployment
6. Evaluation & Monitoring

## 📱 Mobile Development Team

### Has several responsibility such as:

1. Making UI/UX
2. Implementing UI/UX
3. Implementing API and Real Time Data
4. Implementing Payment Gateway
5. Implement Notification System Alert
6. Implement Authentication and OTP
7. Making UI and Unit Testing

## ☁️ Cloud Computing Team

### Has several responsibility such as:

1. API Research
2. Database Integration
3. API Development
4. Admin Dashboard
5. Deploy Model
6. API Deployment
7. API Testing
8. API Fixing
9. API Documentation

## 🛠️ Installation Steps

1. Clone the repository

```bash
git clone https://github.com/OktoniusZ/chickmed.git
```

2. Change the working directory

```bash
cd chickmed
```

3. Install dependencies

```bash
npm install
composer install
```

4. Run the app

```bash
php artisan serve
npm run dev
```

🌟 You are all set!

## ⚡Visit Our Website

You can visit our web at : http://35.219.37.188

## 📝 REST API Documentation

The REST API to the ChickMed app is described below.

## Get list of articles

### Request

`GET /article/`

     http://35.219.37.188/api/articles

### Response

    "success": true,
    "message": "List Data Articles",
    "data": [
        {
            "id": 10,
            "image": "http://localhost:8000/public/articles/kduzMptaB4uLLnSd7SdXMsy7PeGkeTHO834AJkmL.jpg",
            "title": "12312",
            "author": "oktoniuszevanya@gmail.com",
            "content": "1233",
            "created_at": "2023-12-15T08:15:32.000000Z",
            "updated_at": "2023-12-15T08:15:42.000000Z"
        }
    ]

## Create another article

`POST /article/`

    http://35.219.37.188/api/articles

### Response

    "success": true,
    "message": "Data Article Berhasil Ditambahkan!",
    "data": {
        "image": "http://localhost:8000/public/articles/C1054iQ46OdtR4hSRvtwi4p5O841vdPny5SWfvrq.jpg",
        "title": "Cara Merawat Ayam Dengan Baik",
        "content": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
        "author": "oktoniuszevanya@gmail.com",
        "updated_at": "2023-12-21T18:56:40.000000Z",
        "created_at": "2023-12-21T18:56:40.000000Z",
        "id": 11
        }

## Edit an article

### Request - Don't forget to add "\_method" to the key and "PUT" to the value.

`POST /article/id`

        http://35.219.37.188/api/articles/{id}

### Response

    "success": true,
    "message": "Data Article Berhasil Diubah!",
    "data": {
        "id": 11,
        "image": "http://localhost:8000/public/articles/N42ac3AQIO1NeaMVr28lOUNPOkncW89FulbSd6jc.jpg",
        "title": "Gejala Sakit Pada Indukan Ayam",
        "author": "oktoniuszevanya@gmail.com",
        "content": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
        "created_at": "2023-12-21T18:56:40.000000Z",
        "updated_at": "2023-12-21T19:06:41.000000Z"
    }

## Delete an article

### Request - Don't forget to add "\_method" to the key and "DELETE" to the value.

`POST /article/id`

    http://35.219.37.188/api/articles/{id}

### Response

    "success": true,
    "message": "Data article Berhasil Dihapus!",
    "data": null

## Get a reports

### Request
    http://35.219.37.188/api/reports


### Response
    "success": true,
    "message": "Analisys Result.",
    "data": [
        {
            "id": 64,
            "user_id": 1,
            "date": "20231221_165152",
            "raw_image": "https://storage.googleapis.com/chickmed/raw_images/original_image_20231221_165152.jpg",
            "result_image": "https://storage.googleapis.com/chickmed/processed_images/process_image_20231221_165152.jpg",
            "created_at": "2023-12-21T16:52:13.000000Z",
            "updated_at": "2023-12-21T16:52:13.000000Z",
            "report_disease": [
                {
                    "id": 73,
                    "report_model_id": "64",
                    "disease_model_id": 2,
                    "confidence": "0.52973944",
                    "bounding_box": "85,263,3220,2970",
                    "created_at": "2023-12-21T16:52:13.000000Z",
                    "updated_at": "2023-12-21T16:52:13.000000Z",
                    "diseases": {
                        "id": 2,
                        "name": "Coccidiosis disease",
                        "description": "Coccidiosis adalah penyakit yang disebabkan oleh parasit protozoa dari genus Eimeria yang menyerang sistem pencernaan unggas dan hewan ternak lainnya. Penyakit ini dapat memengaruhi berbagai jenis unggas, termasuk ayam. ",
                        "solution": "Dalam mengatasi infeksi coccidiosis pada unggas, tindakan utama melibatkan pemberian antikoksidiosis sebagai langkah preventif yang efektif. Selain itu, manajemen kandang yang baik, seperti praktik kebersihan yang ketat dan rotasi penggunaan kandang, dapat membantu mengurangi risiko kontaminasi dan penyebaran parasit. Vaksinasi juga dapat diimplementasikan untuk membangun kekebalan pada unggas.",
                        "created_at": "2023-12-13T01:31:08.000000Z",
                        "updated_at": "2023-12-13T01:31:08.000000Z"
                    }
                }
            ]
        }
    ]

## Get a detail report

### Request
    http://35.219.37.188/api/reports/detail/{id}


### Response
    "success": true,
        "message": "Detail Analisys Result.",
        "data": {
            "id": 64,
            "user_id": 1,
            "date": "20231221_165152",
            "raw_image": "https://storage.googleapis.com/chickmed/raw_images/original_image_20231221_165152.jpg",
            "result_image": "https://storage.googleapis.com/chickmed/processed_images/process_image_20231221_165152.jpg",
            "created_at": "2023-12-21T16:52:13.000000Z",
            "updated_at": "2023-12-21T16:52:13.000000Z",
            "report_disease": [
                {
                    "id": 73,
                    "report_model_id": "64",
                    "disease_model_id": 2,
                    "confidence": "0.52973944",
                    "bounding_box": "85,263,3220,2970",
                    "created_at": "2023-12-21T16:52:13.000000Z",
                    "updated_at": "2023-12-21T16:52:13.000000Z",
                    "diseases": {
                        "id": 2,
                        "name": "Coccidiosis disease",
                        "description": "Coccidiosis adalah penyakit yang disebabkan oleh parasit protozoa dari genus Eimeria yang menyerang sistem pencernaan unggas dan hewan ternak lainnya. Penyakit ini dapat memengaruhi berbagai jenis unggas, termasuk ayam. ",
                        "solution": "Dalam mengatasi infeksi coccidiosis pada unggas, tindakan utama melibatkan pemberian antikoksidiosis sebagai langkah preventif yang efektif. Selain itu, manajemen kandang yang baik, seperti praktik kebersihan yang ketat dan rotasi penggunaan kandang, dapat membantu mengurangi risiko kontaminasi dan penyebaran parasit. Vaksinasi juga dapat diimplementasikan untuk membangun kekebalan pada unggas.",
                        "created_at": "2023-12-13T01:31:08.000000Z",
                        "updated_at": "2023-12-13T01:31:08.000000Z"
                    }
                }
            ]
        }

## 🏆 Contributor

1. Syair Dafiq Faizur Rahman (M200BSY0683) - ML - Universitas Diponegoro
2. Jihan Apriliani Nurhasanah (M116BSX1565) - ML - Institut Teknologi Kalimantan
3. Muhammad Insan Kamil (M116BSY0541) - ML - Institut Teknologi Kalimantan
4. Oktonius Zevanya Simanungkalit (C172BSY3184) - CC - Universitas Mikroskil
5. Andre Sevtian (C687BSY4375) - CC - - Universitas Muhammadiyah Bangka Belitung
6. Hengki Agung Prayoga (A116BSY2327) - MD -Institut Teknologi Kalimantan

<h3 align="left">Languages and Tools:</h3>
<p align="left"> <a href="https://cloud.google.com" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/google_cloud/google_cloud-icon.svg" alt="gcp" width="40" height="40"/> </a> <a href="https://laravel.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg" alt="laravel" width="40" height="40"/> </a> <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" width="40" height="40"/> </a> <a href="https://reactjs.org/" target="_blank" rel="noreferrer"> <img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg" alt="react" width="40" height="40"/> </a> <a href="https://tailwindcss.com/" target="_blank" rel="noreferrer"> <img src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg" alt="tailwind" width="40" height="40"/> </a> </p>
