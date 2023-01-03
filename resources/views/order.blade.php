<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/order.css')}}">

        <title>Order </title>
        <!--
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        -->
    </head>
    <body>
      <!-- SECTION : NAVBAR -->
  
      <nav class="wrapper">
        <div class="sideLeft">
          <ul class="navigation">
            <li><a href="/homepage">Template Undangan</a></li>
            <li><a href="/order">Pesanan Saya</a></li>
          </ul>
        </div>
        <ul class="cart">
            <li><a href="/cart"><img src="https://drive.google.com/uc?export=view&id=1ye7Fqyywv3mWtbhAgup4--FNIyZ8Qvps"></a></li>
            <li><b>Hi, {{session('account')->Username}}</b></li>
            <li><a><img src="https://drive.google.com/uc?export=view&id=1DPnqicQgMiCxLMn7yPNj2E1TAprKSLxi"></a>
              <ul class="dropdown">
                <li><a href="/logout">Logout</a></li>
              </ul>
            </li>
        </ul>
      </nav>
  
      <!-- END SECTION : NAVBAR -->
  
      <!-- SECTION : CONTENT -->
      @if ($Templates != [])
      <div class="top-content">
        <div class="title">
          <h1>Informasi Pesanan</h1>
        </div>
      </div>
      <div class="list-product">
        @foreach ($Orders as $order)
        @php
            $i = 0
        @endphp
        @foreach ($Templates as $template)
        @if ($order->TemplateID == $template->TemplateID && $i == 0)
        <div class="wrap-product">
          <div class="left-image">
            <img
              src="{{$template->LinkPreview}}"
            />
            <div class="mid-detail">
              <div class="item-name">
                @if ($order->OrderStatus)
                <p class="done">Selesai</p>
                @else
                @if ($order->VerifikasiStatus && $order->InvoiceStatus)
                <p class="done">Sedang dalam Proses</p>
                @else
                @if ($order->InvoiceStatus)
                <p class="done">Menunggu Verifikasi</p>
                @else
                <p class="done">Memproses Invoice</p>
                @endif
                @endif 
                @endif
                <h3>{{$template->NamaTemplate}}</h3>
                <p>{{$template->NamaTema}}</p>
                <p>Order ID : 1142023</p>
              </div>
              <div class="total-price">
                <p>Total Belanja Rp {{$template->Harga}}</p>
              </div>
            </div>
          </div>
          <div class="right-price">
            <div class="btn-action">
              @if ($order->OrderStatus)
              <a
                href="C:\levidio wedding\modul\Module 3 - Website & Landing Page\HTML Only\wedding-1\long\long-wed1.html"
                ><button class="btn-verified">Lihat Undangan</button>
              </a>
              <a
                href="s"
                ><button class="btn-verified">Ucapan</button>
              </a>
              <a
                href="s"
                ><button class="btn-verified">Donasi</button>
              </a>
              @else
              @if ($order->VerifikasiStatus && $order->InvoiceStatus)
              <a
                href="s"
                ><button class="btn-verified">Lihat Prototype</button>
              </a>
              <a
                href="s"
                ><button class="btn-verified">Ajukan Revisi</button>
              </a>
              @endif
              @endif
              
            </div>
          </div>
        </div>
        @php
            $i = 1
        @endphp
        @endif
        @endforeach
        @endforeach
      </div>
      @else
      <div class="content">
        <h2>
          Yah Pesananmu kosong<br />
          Pesan sekarang!
        </h2>
        <img src="https://drive.google.com/uc?export=view&id=1oXYOiWZNY4ZMdHaRplf4AcxbTC3KoCWb" alt="" />
      </div>
      @endif
      <!-- END SECTION : CONTENT -->
    </body>
</html>
