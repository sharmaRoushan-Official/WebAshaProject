<section class="training-calender py-5" id="training-options">
  <div class="container">
    <div class="wraper">
      <h2 class="heading-main-1 text-center mb-5">
        Mode of <span class="red-color">Training</span>
      </h2>

      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card h-100 text-center p-3 shadow-sm">
            <img src="assets/imgs/mode-training-fi-1.png" class="card-img-top mx-auto" alt="E-learning" style="max-width:80px;">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">E-learning</h4>
              <p class="card-text flex-grow-1">
                Self-paced online learning with access to recorded sessions and resources.
              </p>
              <a href="#" class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Request for batch</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card h-100 text-center p-3 shadow-sm">
            <img src="assets/imgs/mode-training-fi-2.png" class="card-img-top mx-auto" alt="Instructor Led" style="max-width:80px;">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">Instructor Led</h4>
              <p class="card-text flex-grow-1">
                Live, interactive sessions with expert instructors.
              </p>
              <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Request for batch</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card h-100 text-center p-3 shadow-sm">
            <img src="assets/imgs/mode-training-fi-3.png" class="card-img-top mx-auto" alt="Bootcamp" style="max-width:80px;">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">Bootcamp</h4>
              <p class="card-text flex-grow-1">
                Intensive, immersive training for rapid skill development.
              </p>
              <a href="#" class="btn btn-outline-secondary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Request for batch</a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card h-100 text-center p-3 shadow-sm">
            <img src="assets/imgs/mode-training-fi-4.png" class="card-img-top mx-auto" alt="Training on Demand" style="max-width:80px;">
            <div class="card-body d-flex flex-column">
              <h4 class="card-title">Training on Demand</h4>
              <p class="card-text flex-grow-1">
                Customized training schedules tailored to your needs.
              </p>
              <a href="#" class="btn btn-outline-primary mt-3" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Enroll in Course">Request for batch</a>
            </div>
          </div>
        </div>
      </div>

    </div>  
  </div>
</section>

<section class="py-5">

<?php
// prepare batches (single source of truth)
$batches = [];

// batch 1: today
$batches[] = [
  'date'   => date('l, F j, Y', strtotime('+0 days')),
  'mode'   => 'Online/Classroom',
  'batch'  => 'Weekdays',
  'time'   => '6:30 PM IST',
  'status' => '<span class="badge bg-danger">Batch Full</span>',
  'action' => '<a href="#" class="btn btn-danger btn-sm">Enrollment Closed →</a>'
];

// batch 2: +7 days
$batches[] = [
  'date'   => date('l, F j, Y', strtotime('+7 days')),
  'mode'   => 'Online/Classroom',
  'batch'  => 'Weekdays',
  'time'   => '6:30 PM IST',
  'status' => '<span class="badge bg-success">Only 1 Seat Available</span><small class="text-muted d-block">Max intake limit is 10</small>',
  'action' => '<a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enrollment Open →</a>'
];

// batch 3: +14 days but skip weekend if falls on Sat/Sun
$date = strtotime('+14 days');
while (date('N', $date) >= 6) { // 6 = Saturday, 7 = Sunday
  $date = strtotime('+1 day', $date);
}
$batches[] = [
  'date'   => date('l, F j, Y', $date),
  'mode'   => 'Online/Classroom',
  'batch'  => 'Weekdays',
  'time'   => '8:00 AM IST',
  'status' => '<span class="badge bg-success">Only 5 Seats Available</span><small class="text-muted d-block">Max intake limit is 10</small>',
  'action' => '<a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enrollment Open →</a>'
];

// batch 4: next Saturday (if today is Saturday, use tomorrow)
$today = date('w'); // 0 (Sun) - 6 (Sat)
$daysToSaturday = (6 - $today + 7) % 7;
$futureWeekend = ($daysToSaturday == 0) ? strtotime('+1 day') : strtotime("+$daysToSaturday days");
$batches[] = [
  'date'   => date('l, F j, Y', $futureWeekend),
  'mode'   => 'Online/Classroom',
  'batch'  => 'Weekends',
  'time'   => '10:00 AM IST',
  'status' => '<span class="badge bg-success">Only 2 Seats Available</span><small class="text-muted d-block">Max intake limit is 10</small>',
  'action' => '<a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enrollment Open →</a>'
];
?>

<!-- Schedule section -->
<div class="container my-4 mb-5">
<h2 class="heading-main-1 text-center mb-4">Upcoming Batches &<span class="red-color"> Schedule</span></h2>
  <!-- Desktop Table: visible from md and up -->
  <div class="table-responsive custom-table d-none d-md-block">
    <table class="table align-middle">
      <thead class="table-light">
        <tr>
          <th scope="col">Date</th>
          <th scope="col">Mode of Class</th>
          <th scope="col">Batch Form</th>
          <th scope="col">Time</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($batches as $batch): ?>
          <tr>
            <td><?= htmlspecialchars($batch['date']) ?></td>
            <td><?= htmlspecialchars($batch['mode']) ?></td>
            <td><?= htmlspecialchars($batch['batch']) ?></td>
            <td><?= htmlspecialchars($batch['time']) ?></td>
            <td>
              <?= $batch['status'] // trusted HTML (badges) ?>
            </td>
            <td>
              <?= $batch['action'] // trusted HTML (buttons) ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Mobile Cards: visible below md -->
  <div class="d-block d-md-none">
    <?php foreach ($batches as $batch): ?>
      <div class="card mb-3 shadow-sm">
        <div class="card-body">
          <h6 class="card-title mb-2"><?= htmlspecialchars($batch['date']) ?></h6>
          <p class="mb-1"><strong>Mode:</strong> <?= htmlspecialchars($batch['mode']) ?></p>
          <p class="mb-1"><strong>Batch:</strong> <?= htmlspecialchars($batch['batch']) ?></p>
          <p class="mb-2"><strong>Time:</strong> <?= htmlspecialchars($batch['time']) ?></p>

          <div class="mb-2">
            <?= $batch['status'] ?>
          </div>

          <div>
            <?= $batch['action'] ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

<!-- Always visible call-to-action under schedule -->
<div class="text-center my-5" role="alert">
  <h5 class="mb-3">📅 Can’t Find a Schedule?</h5>
  <p class="mb-4">Don’t worry — we’ll help you arrange a suitable batch.</p>
  
  <div class="d-flex justify-content-center gap-3 flex-wrap">
    <!-- Call Us Button -->
    <a href="tel:+918485847920" class="btn btn-danger d-inline-flex align-items-center px-4">
      <i class="fa fa-phone me-2"></i> Call Us
    </a>
    <!-- Contact Us Button -->
    <a href="#contact" class="btn btn-outline-danger d-inline-flex align-items-center px-4" data-bs-toggle="modal" data-bs-target="#enquiryModal">
      <i class="fa fa-envelope me-2"></i> Contact Us
    </a>
  </div>
</div>




</div>
<!-- End Schedule section -->

</section>

