<!DOCTYPE html>
<html>
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
  </head>
  <body>
    <button onclick="generateReport()">Download Report</button>
    <script>
        function generateReport() {
            var doc = new jsPDF();
            doc.text("Report", 10, 10);
            doc.save("report.pdf");
        }
    </script>
  </body>
</html>