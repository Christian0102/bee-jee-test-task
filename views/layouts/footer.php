   <script>
       $(document).ready(function() {
           //$('#tasks').DataTable();
           $('#tasks').dataTable({
               "iDisplayLength": 3,
           });

       });
      let tabId =  Math.random();
       localStorage.setItem('tabId',tabId);
     document.cookie = 'Test Cookie';
   </script>
   </body>

   </html>