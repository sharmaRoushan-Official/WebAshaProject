<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Including common header links, meta tags, favicon, and external resources -->
    <?php include("include/headerlink.php"); ?>
    <?php
      $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
      $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <!-- Page title and meta tags for SEO -->
    <title>Installment Calculator / EMI | WebAsha Technologies - IT Training in Pune</title>
    <meta name="description" content="Installment & EMI calculator for course fees at WebAsha Technologies. Compare schemes, see advance, EMI, interest, GST and total payable amounts.">
    <meta name="keywords" content="Installment Calculator, EMI Calculator, WebAsha Technologies, Course EMI, Subvention Calculator">
    <link rel="canonical" href="<?php echo htmlspecialchars($current_url, ENT_QUOTES); ?>">
    <!-- Bootstrap CSS for styling -->
   
</head>
<body class="bg-light">
    <!-- Including site header -->
    <?php include("include/header.php"); ?>
    <!-- Banner / Breadcrumb (black banner) -->
    <div class="breadcrumb-bar text-center">
      <div class="container">
        <div class="row align-items-center py-3">
          <div class="col-12">
            <h1 class="heading-main-1 mb-2 text-white">Installment Calculator / EMI</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center mb-0" style="background:transparent;">
                <li class="breadcrumb-item">
                  <a href="/" class="text-decoration-none text-white" aria-label="Home">
                    <svg viewBox="0 0 20 18" xmlns="http://www.w3.org/2000/svg" width="15" height="12" role="img" aria-hidden="true">
                      <path d="M8 17.5V11.5H12V17.5H17V9.5H20L10 0.5L0 9.5H3V17.5H8Z" fill="currentColor" />
                    </svg>
                    <span class="ms-1">Home</span>
                  </a>
                </li>
                <li class="breadcrumb-item active text-white" aria-current="page">Installment Calculator / EMI</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Content Section -->
    <main class="container my-4">
      <div class="card p-4 shadow-sm" role="region" aria-label="Installment and EMI calculator">
        <h1 class="h4 mb-3">Installment / EMI Calculator</h1>
        <p class="text-muted small">Quickly compute advance, financed amount, monthly EMI, total interest, and GST for our three available subvention schemes.</p>
        <!-- Input Form for Calculator -->
        <div class="row g-3 mb-3" role="form" aria-label="Calculator inputs">
          <div class="col-md-3">
            <label for="amount" class="form-label small">Course Fee (INR)</label>
            <input id="amount" type="number" class="form-control" value="100000" min="1" aria-label="Course fee in rupees" />
          </div>
          <div class="col-md-3">
            <label for="schemeSelect" class="form-label small">Scheme</label>
            <select id="schemeSelect" class="form-select" aria-label="Select scheme">
              <option value="1">Scheme 1 — Tenure 8 (Adv EMI 2 / Net 6) — Subvention 5.75%</option>
              <option value="2">Scheme 2 — Tenure 9 (Adv EMI 3 / Net 6) — Subvention 5.00%</option>
              <option value="3">Scheme 3 — Tenure 15 (Adv EMI 3 / Net 12) — Subvention 9.25%</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="gst" class="form-label small">GST on Subvention (%)</label>
            <input id="gst" type="number" class="form-control" value="18" aria-label="GST percentage" />
          </div>
          <div class="col-md-3">
            <label for="pf" class="form-label small">Processing Fee (PF)</label>
            <input id="pf" type="number" class="form-control" value="767" aria-label="Processing fee in rupees" />
          </div>
        </div>
        <!-- Notes about Assumptions -->
        <div class="small text-muted mt-2">
          Assumptions: <br>
          • Tenure = total months; Adv EMI = number of EMIs customer pays upfront; Net Tenure = months financed. <br>
          • Subvention % is treated as annual interest. EMI is calculated on financed principal over Net Tenure. <br>
          • Advance is computed as (Adv EMI / Tenure) × Course Fee.
        </div>
        <!-- Schemes Table -->
        <table class="table table-bordered mt-3" aria-label="Available schemes">
          <thead>
            <tr>
              <th>Scheme</th>
              <th>Tenure (months)</th>
              <th>Adv EMI</th>
              <th>Net Tenure (months)</th>
              <th>Subvention % (Annual)</th>
              <th>PF (INR)</th>
              <th>Course Duration</th>
            </tr>
          </thead>
          <tbody>
            <tr data-scheme="1">
              <td>Scheme 1</td>
              <td class="tenure">8</td>
              <td class="adv">2</td>
              <td class="net">6</td>
              <td class="rate">5.75</td>
              <td class="pf">767</td>
              <td>5-6 Months</td>
            </tr>
            <tr data-scheme="2">
              <td>Scheme 2</td>
              <td class="tenure">9</td>
              <td class="adv">3</td>
              <td class="net">6</td>
              <td class="rate">5.00</td>
              <td class="pf">767</td>
              <td>5-6 Months</td>
            </tr>
            <tr data-scheme="3">
              <td>Scheme 3</td>
              <td class="tenure">15</td>
              <td class="adv">3</td>
              <td class="net">12</td>
              <td class="rate">9.25</td>
              <td class="pf">767</td>
              <td>12-24 Months</td>
            </tr>
          </tbody>
        </table>
        <!-- Output Section for Results -->
        <div class="bg-light p-3 rounded mt-3" id="result" aria-live="polite">
          <!-- Results will be injected here -->
        </div>
        <!-- Action Buttons -->
        <div class="d-flex gap-2 mt-3">
          <button id="calc" class="btn btn-primary" aria-label="Calculate EMI">Calculate</button>
          <button id="reset" class="btn btn-secondary" aria-label="Reset calculator">Reset</button>
        </div>
      </div>
      <!-- FAQ/Explanation Card -->
      <div class="card p-4 shadow-sm mt-4">
        <h2 class="h4 mb-3">How this calculator works</h2>
        <p class="text-muted small">The calculator assumes subvention percent is the annual rate applied to the financed principal. Advance EMIs are treated as immediate payments by the candidate and are not part of the financed principal. GST on the subvention (interest) is shown separately and added to the final payable amount.</p>
      </div>
    </main>
    <!-- JavaScript for Calculator Logic -->
    <script>
      const schemes = {
        1: { tenure: 8, adv: 2, net: 6, rate: 5.75, pf: 767 },
        2: { tenure: 9, adv: 3, net: 6, rate: 5.00, pf: 767 },
        3: { tenure: 15, adv: 3, net: 12, rate: 9.25, pf: 767 }
      };

      const el = id => document.getElementById(id);

      function currency(x) {
        return Number(x).toLocaleString('en-IN', { maximumFractionDigits: 2, minimumFractionDigits: 2 });
      }

      function compute() {
        const amount = parseFloat(el('amount').value) || 0;
        const schemeId = el('schemeSelect').value;
        const gst = parseFloat(el('gst').value) || 0;
        const pf = parseFloat(el('pf').value) || 0;
        const s = schemes[schemeId];

        // Calculate financed principal and advance amount
        const financedPrincipal = amount * (s.net / s.tenure);
        const advanceAmount = amount * (s.adv / s.tenure);

        // Calculate monthly EMI
        const annualR = s.rate / 100;
        const monthlyR = annualR / 12;
        const n = s.net;
        let emi = 0;
        if (n <= 0) {
          emi = 0;
        } else if (monthlyR === 0) {
          emi = financedPrincipal / n;
        } else {
          const pow = Math.pow(1 + monthlyR, n);
          emi = financedPrincipal * monthlyR * pow / (pow - 1);
        }

        // Calculate totals
        const totalEmiPayment = emi * n;
        const totalInterest = Math.max(0, totalEmiPayment - financedPrincipal);
        const gstAmount = totalInterest * (gst / 100);
        const grandTotalExclGST = totalEmiPayment + advanceAmount + pf;
        const grandTotalInclGST = grandTotalExclGST + gstAmount;

        // Generate output HTML using Bootstrap grid
        const html = `
          <div class="row row-cols-1 row-cols-md-2 g-3">
            <div>
              <strong>Course Fee</strong>
              <div>₹ ${currency(amount)}</div>
              <div class="text-muted small">Entered</div>
            </div>
            <div>
              <strong>Selected Scheme</strong>
              <div>Scheme ${schemeId} — Tenure ${s.tenure}m, Adv ${s.adv}, Net ${s.net}m</div>
              <div class="text-muted small">Subvention ${s.rate}% p.a.</div>
            </div>
            <div>
              <strong>Advance Amount (Customer Upfront)</strong>
              <div>₹ ${currency(advanceAmount)}</div>
              <div class="text-muted small">Paid immediately by candidate</div>
            </div>
            <div>
              <strong>Financed Principal</strong>
              <div>₹ ${currency(financedPrincipal)}</div>
              <div class="text-muted small">Principal used for EMI calculation</div>
            </div>
            <div>
              <strong>Monthly EMI</strong>
              <div>₹ ${currency(emi)}</div>
              <div class="text-muted small">For ${n} months</div>
            </div>
            <div>
              <strong>Total EMI Paid</strong>
              <div>₹ ${currency(totalEmiPayment)}</div>
              <div class="text-muted small">EMI × months</div>
            </div>
            <div>
              <strong>Total Interest (Subvention)</strong>
              <div>₹ ${currency(totalInterest)}</div>
              <div class="text-muted small">Excluding GST</div>
            </div>
            <div>
              <strong>GST on Subvention (${gst}%)</strong>
              <div>₹ ${currency(gstAmount)}</div>
              <div class="text-muted small">Tax on interest</div>
            </div>
            <div>
              <strong>Processing Fee (PF)</strong>
              <div>₹ ${currency(pf)}</div>
              <div class="text-muted small">One-time fee</div>
            </div>
            <div>
              <strong>Total Payable (Excl. GST)</strong>
              <div>₹ ${currency(grandTotalExclGST)}</div>
              <div class="text-muted small">Advance + EMIs + PF</div>
            </div>
            <div>
              <strong>Total Payable (Incl. GST)</strong>
              <div>₹ ${currency(grandTotalInclGST)}</div>
              <div class="text-muted small">Includes GST on interest</div>
            </div>
          </div>
        `;
        el('result').innerHTML = html;
      }

      // Event Listeners for Buttons and Scheme Selection
      el('calc').addEventListener('click', compute);
      el('reset').addEventListener('click', () => {
        el('amount').value = 100000; // Base amount set to 100000
        el('schemeSelect').value = '1';
        el('gst').value = '18';
        el('pf').value = '767';
        el('result').innerHTML = '';
      });
      el('schemeSelect').addEventListener('change', () => {
        const s = schemes[el('schemeSelect').value];
        el('pf').value = s.pf;
      });

      // Initial computation
      compute();
    </script>
    <!-- Including site footer -->
    <?php include("include/footer.php"); ?>
    <!-- Bootstrap JS and Popper.js for interactivity -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <?php include("include/footerlink.php"); ?>
</body>
</html>