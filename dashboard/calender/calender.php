<?php include '../../components/header.php'; ?>
<?php include '../../components/sidebar.php'; ?>

<main class="container-fluid mt-4">
<?php
// dashboard/calendar.php
?>

<!DOCTYPE html>






<div class="main">
  <h2 class="mb-4">Unified Calendar</h2>

  <div id="calendar"></div>
</div>


<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');

    const calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      height: 'auto',
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      events: [
        {
          title: 'Lease Start - CH-1021',
          start: '2025-06-17',
          end: '2025-06-25',
          color: '#0d6efd' // blue
        },
        {
          title: 'Reservation Out - TR-8802',
          start: '2025-06-19',
          color: '#ffc107' // yellow
        },
        {
          title: 'Maintenance - CH-1044',
          start: '2025-06-22',
          end: '2025-06-23',
          color: '#dc3545' // red
        },
        {
          title: 'Reservation In - TR-7755',
          start: '2025-06-20',
          color: '#20c997' // teal
        }
      ]
    });

    calendar.render();
  });
</script>
</main>

<?php include '../../components/footer.php'; ?>
