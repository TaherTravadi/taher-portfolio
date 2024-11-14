<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .hero-section {
            background: url('{{ asset('images/background.jpg') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
            animation: moveBackground 40s linear infinite;
            /* Animation for background movement */
        }

        /* Keyframes for the moving background */
        @keyframes moveBackground {
            0% {
                background-position: center center;
            }

            50% {
                background-position: top right;
            }

            100% {
                background-position: center center;
            }
        }

        .hero-content {
            text-align: center;
        }

        .portfolio-section {
            padding: 4rem 0;
        }

        .portfolio-item img {
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="hero-section">
        <div class="hero-content">
            <h1>Welcome to My Portfolio</h1>
            <p class="lead">Showcasing my skills, projects, and passion for development</p>
            <a href="#portfolio" class="btn btn-primary btn-lg">View My Work</a>
        </div>
    </div>

    <div id="portfolio" class="container portfolio-section">
        <h2 class="text-center mb-5">Featured Projects</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card portfolio-item">
                    <img src="https://source.unsplash.com/featured/?web,design" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">A brief description of the project goes here. Highlight the technologies
                            used and the purpose of the project.</p>
                        <a href="#" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card portfolio-item">
                    <img src="https://source.unsplash.com/featured/?app,development" class="card-img-top"
                        alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">A brief description of the project goes here. Highlight the technologies
                            used and the purpose of the project.</p>
                        <a href="#" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card portfolio-item">
                    <img src="https://source.unsplash.com/featured/?coding,software" class="card-img-top"
                        alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p class="card-text">A brief description of the project goes here. Highlight the technologies
                            used and the purpose of the project.</p>
                        <a href="#" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-4">
        <p>&copy; 2024 Taher Travadi. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
