 <!-- Backend Bundle JavaScript -->
 <script src="{{ asset('js/backend-bundle.min.js')}}"></script>

 @yield('bottom_script')

 <!-- Flextree Javascript-->
 <script src="{{ asset('js/flex-tree.min.js')}}"></script>
 <script src="{{ asset('js/tree.js')}}"></script>

 <!-- Table Treeview JavaScript -->
 <script src="{{ asset('js/table-treeview.js')}}"></script>

 <!-- SweetAlert JavaScript -->
 <script src="{{ asset('js/sweetalert.js')}}"></script>

 <!-- Vectoe Map JavaScript -->
 <script src="{{ asset('js/vector-map-custom.js')}}"></script>

 <!-- Chart Custom JavaScript -->
 <script src="{{ asset('js/customizer.js')}}"></script>

 <script src="{{ asset('vendor/Leaflet/leaflet.js')}}"></script>

 <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker-full.js')}}"></script>

 <script src="{{ asset('js/charts/progressbar.js')}}"></script>

 <!-- Chart Custom JavaScript -->
 <script src="{{ asset('js/chart-custom.js')}}"></script>
 <script src="{{ asset('js/charts/01.js')}}"></script>
 <script src="{{ asset('js/charts/02.js')}}"></script>

 <!-- slider JavaScript -->
 <script src="{{ asset('js/slider.js')}}"></script>

 <!-- Emoji picker -->
 <script src="{{ asset('vendor/emoji-picker-element/index.js')}}" type="module"></script>
 @if(isset($assets) && (in_array('datatable',$assets) || in_array('datatable_builder',$assets)))
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.select.min.js') }}"></script>
@endif
 <!-- app JavaScript -->
 <script src="{{ asset('js/app.js')}}"></script>
