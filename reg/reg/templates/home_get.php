<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Carousel Card</title>
    
    <style>
        .container_home {
            max-width: 1200px;
            width: 100%;
            margin: auto;
        }

        .carousel-inner {
            display: flex;
        }

        .carousel-item {
            width: 100%;
        }

        .card {
            width: 22rem;
            height: 30rem;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease, box-shadow 0.3s ease;
        }

        .carousel-item.active .card {
            transform: scale(1);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }

        .carousel-item:not(.active) .card {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            width: 100%;
            height: 60%;
            object-fit: cover;
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .carousel-control-prev, .carousel-control-next {
            top: 50%;
            transform: translateY(-50%);
            z-index: 5;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }

        .carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

    </style>
</head>

<body>
    <br>
    <h1>Wellcome to Active Zone</h1>
    <div class="container_home mt-5">
        <div id="cardCarousel" class="carousel slide">
            <div class="carousel-inner">
                <!-- Slide 1: การ์ด 1-3 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Card 1">
                                <div class="card-body text-center">
                                    <h5 class="card-title">การ์ดที่ 1</h5>
                                    <p class="card-text">รายละเอียดของการ์ดนี้...</p>
                                    <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Card 2">
                                <div class="card-body text-center">
                                    <h5 class="card-title">การ์ดที่ 2</h5>
                                    <p class="card-text">รายละเอียดของการ์ดนี้...</p>
                                    <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Card 3">
                                <div class="card-body text-center">
                                    <h5 class="card-title">การ์ดที่ 3</h5>
                                    <p class="card-text">รายละเอียดของการ์ดนี้...</p>
                                    <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2: การ์ด 4-6 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/500x300" class="card-img-top" alt="Card 4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">การ์ดที่ 4</h5>
                                    <p class="card-text">รายละเอียดของการ์ดนี้...</p>
                                    <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="##" class="card-img-top" alt="Card 5">
                                <div class="card-body text-center">
                                    <h5 class="card-title">การ์ดที่ 5</h5>
                                    <p class="card-text">รายละเอียดของการ์ดนี้...</p>
                                    <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                            <img src="images/3.png" class="card-img-top" alt="Card 6">
                                <div class="card-body text-center">
                                    <h5 class="card-title">การ์ดที่ 6</h5>
                                    <p class="card-text">รายละเอียดของการ์ดนี้...</p>
                                    <a href="#" class="btn btn-primary">ดูเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <!-- ปุ่มเลื่อนซ้าย -->
            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <!-- ปุ่มเลื่อนขวา -->
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
