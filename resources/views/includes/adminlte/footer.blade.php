        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
                <div class="p-3">
                    <h5>Title</h5>
                    <p>Sidebar content</p>
                </div>
            </aside>
            <!-- /.control-sidebar -->
    
            <!-- Main Footer -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2019 <a href="#">Larablog</a>.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->
    
        <!-- REQUIRED SCRIPTS -->
    
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <!-- Global Script -->
        <script src="{{ asset('js/script.js') }}"></script>
        
        @stack('js')
    </body>
    
</html>    