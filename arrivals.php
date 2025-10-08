<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Card Scale Animation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .card-custom {
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-custom:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    .card-custom img {
      border-radius: 15px;
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body class="bg-light">

  <div class="container ">
    <h2 class=" text-center d-flex justify-content-center align-items-center fw-bold gap-2 my-4">New <span class="text-info">Arrival</span></h2>
    <div class="row g-4">
      
      <!-- Card 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="card-custom">
          <img src="https://techhunk.pk/cdn/shop/files/fusion_7_11zon.webp?v=1756931013&width=1600" alt="X Spectra">
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="card-custom">
          <img src="https://techhunk.pk/cdn/shop/files/gen3blackout_8_11zon.webp?v=1756931012&width=1600" alt="AI Watch">
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="card-custom">
          <img src="https://techhunk.pk/cdn/shop/files/spectra_1.webp?v=1757501283&width=1600" alt="Fusion Watch">
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="card-custom">
          <img src="https://techhunk.pk/cdn/shop/files/steelxouy.png?v=1757076031&width=1600" alt="SteelX Earbuds">
        </div>
      </div>

    </div>
  </div>

</body>
</html>
