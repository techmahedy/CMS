@include('admin.layout.header')

    <!-- Sidebar menu-->

@include('admin.layout.sidebar')

    <main class="app-content">

      @section('main-content')




      @show

     
    </main>
   @include('admin.layout.footer')
   @section('selectBoxFooter')
   @show
   @section('ckEditor')
   @show
   @section('DataTableFooter')
   @show
   @section('DeleteAlert')
   @show
  </body>
</html>