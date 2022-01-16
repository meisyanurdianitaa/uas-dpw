<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

@include("template.section.assets")
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include("template.section.header")
      <div class="main-sidebar">
        @include("template.section.sidebar")
      </div>

      <!-- Main Content -->
      <div class="main-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            @include('template.utils.notif')
          </div>
        </div>
      </div>
       @yield('content')
        </section>
      </div>
      @include("template.section.footer")
    </div>
  </div>

@include("template.section.js")
</body>
</html>
