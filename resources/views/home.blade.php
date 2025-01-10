<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffe Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header class="d-flex justify-content-between align-items-center p-3 bg-light">
    <div class="d-flex align-items-center">
        <img src="{{ asset('images/coffeeshop.png') }}" alt="coffeeshop logo" style="width: 80px; height: 80px;">
        <h1 class="ms-2">Coffee Shop</h1>
    </div>
    <div>
        <a href="/login" class="btn btn-success me-2">Login</a>
        <a href="/register" class="btn btn-success">Register</a>
    </div>
</header>



    <!-- Image Cards Section -->
    <div class="container my-5">
    <h2 class="text-center mb-4">Product</h2>
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('images/esspreso.jpg') }}" class="card-img-top" alt="Makanan Kemasan" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Espresso Blend</h5>
                    <p class="card-text">Nikmati keajaiban rasa dengan Kopi Espresso Blend Premium kami, racikan khusus untuk para pencinta kopi sejati. Terbuat dari biji kopi pilihan Arabika dan Robusta yang dipetik langsung dari perkebunan terbaik di Indonesia, setiap teguknya memberikan keseimbangan rasa yang sempurna.</p>
                    <style>
                    .btn-green {
                    background-color: green;
                    color: white;
                    border: none;
                    }
                    </style>
                    <div class="detail-description d-none"></div> <!-- Placeholder for detailed description -->
                    <button class="btn btn-green" onclick="toggleDescription(this, 'Rasakan kemewahan espresso dalam secangkir kopi, karena setiap teguknya adalah cerita rasa yang tak terlupakan.')">View Detail</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('images/arabika.jpg') }}" class="card-img-top" alt="Kopi Arabika" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Arabika Coffee</h5>
                    <p class="card-text">Rasakan sensasi kopi kelas dunia dengan Arabika Coffee Premium kami, hasil panen dari dataran tinggi terbaik di Indonesia. Dengan cita rasa yang halus dan aroma khas yang memikat, kopi Arabika ini menjadi pilihan sempurna bagi para pencinta kopi yang mengutamakan kualitas dan keunikan rasa.</p>
                    <style>
                    .btn-green {
                    background-color: green;
                    color: white;
                    border: none;
                    }
                    </style>
                    <div class="detail-description d-none"></div> <!-- Placeholder for detailed description -->
                    <button class="btn btn-green" onclick="toggleDescription(this, 'Arabika Coffee Premium Karena setiap teguk adalah refleksi dari keindahan alam dan ketelitian dalam proses pengolahan.')">View Detail</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('images/nescafe-gold.jpg') }}" class="card-img-top" alt="Nescafe Gold" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Nescafe Gold</h5>
                    <p class="card-text">Nikmati momen spesial dengan NESCAFÉ Gold, kopi instan premium yang dibuat untuk memberikan kelezatan rasa dan aroma layaknya kopi fresh brew. Dibuat dari perpaduan biji kopi Arabika dan Robusta terbaik, NESCAFÉ Gold menghadirkan cita rasa yang lembut, kaya, dan berkelas dalam setiap cangkirnya.</p>
                    <div class="detail-description d-none"></div> <!-- Placeholder for detailed description -->
                    <style>
                    .btn-green {
                    background-color: green;
                    color: white;
                    border: none;
                    }
                    </style>
                    <button class="btn btn-green" onclick="toggleDescription(this, 'NESCAFE Gold Karena setiap teguk adalah kenikmatan premium yang sempurna untuk momen berharga Anda')">View Detail</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="bg-darkblue text-white text-center py-3">
    <p class="text-shadow">
        Alamat : Jl.coffeeshop No. 1 
    </p>
    <p class="text-shadow">
        <!-- Logo WhatsApp diambil dari folder 'images' -->
        <img src="{{ asset('images/wa.png') }}" alt="WhatsApp Logo" style="width: 20px; height: 20px; vertical-align: middle;"> 
         0812345678
    </p>
</footer>
</footer>
<style>
    /* Menambahkan bayangan hitam pada teks */
    .text-shadow {
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Bayangan hitam lebih gelap */
    }

    /* Mengatur latar belakang dark blue */
    footer {
        background-color: #00008B; /* Dark blue */
    }
</style>

<script>
    function toggleDescription(button, description) {
        let cardBody = button.parentElement;
        let detailDiv = cardBody.querySelector('.detail-description');
        if (detailDiv.classList.contains('d-none')) {
            detailDiv.innerText = description;
            detailDiv.classList.remove('d-none');
            detailDiv.classList.add('mt-2');
        } else {
            detailDiv.classList.add('d-none');
            detailDiv.innerText = '';
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>