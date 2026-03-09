<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loan Disbursement Calculator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      background: #f5f5f5;
    }
    h1 {
      text-align: center;
    }
    .container {
      max-width: 1100px;
      margin: 0 auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 16px;
    }
    .field {
      display: flex;
      flex-direction: column;
      gap: 4px;
    }
    label {
      font-size: 0.9rem;
      font-weight: 600;
    }
    input[type="number"] {
      padding: 6px 8px;
      font-size: 0.9rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .section-title {
      margin: 20px 0 10px;
      font-size: 1.1rem;
      font-weight: bold;
      border-bottom: 1px solid #ddd;
      padding-bottom: 4px;
    }
    .btn-row {
      margin-top: 20px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    button {
      padding: 8px 16px;
      font-size: 0.95rem;
      border-radius: 4px;
      border: none;
      cursor: pointer;
    }
    .btn-primary {
      background: #007bff;
      color: #fff;
    }
    .btn-secondary {
      background: #6c757d;
      color: #fff;
    }
    .results {
      margin-top: 20px;
      background: #f9fafb;
      padding: 15px;
      border-radius: 6px;
      border: 1px solid #e0e0e0;
    }
    .results p {
      margin: 4px 0;
      font-size: 0.95rem;
    }
    .highlight {
      font-weight: bold;
    }
    .inline {
      display: inline-block;
      min-width: 180px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Loan Disbursement Calculator</h1>

    <!-- BASIC AMOUNTS -->
    <div class="section-title">Basic Loan Inputs</div>
    <div class="grid">
      <div class="field">
        <label for="A">A - Product Price</label>
        <input type="number" id="A" value="55000" step="0.01">
      </div>
      <div class="field">
        <label for="B">B - Gross Loan Amount</label>
        <input type="number" id="B" value="55000" step="0.01">
      </div>
      <div class="field">
        <label for="C">C - Net Loan Amount</label>
        <input type="number" id="C" value="41250" step="0.01">
      </div>
      <div class="field">
        <label for="P">P - Total EMI (per month)</label>
        <input type="number" id="P" value="6875" step="0.01">
      </div>
      <div class="field">
        <label for="tenure">Tenure (No. of EMIs)</label>
        <input type="number" id="tenure" value="8" step="1">
      </div>
      <div class="field">
        <label for="O">O - ROI (% per annum)</label>
        <input type="number" id="O" value="0" step="0.01">
      </div>
    </div>

    <!-- CHARGES / COMPONENTS -->
    <div class="section-title">Charges & Components</div>
    <div class="grid">
      <div class="field">
        <label for="E">E - Advance EMI</label>
        <input type="number" id="E" value="13750" step="0.01">
      </div>
      <div class="field">
        <label for="F">F - Service Charge</label>
        <input type="number" id="F" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="G">G - Upfront Interest</label>
        <input type="number" id="G" value="767" step="0.01">
      </div>
      <div class="field">
        <label for="H">H - Dealer Interest Subsidy Value</label>
        <input type="number" id="H" value="3732" step="0.01">
      </div>
      <div class="field">
        <label for="I">I - MBD from Dealer Value</label>
        <input type="number" id="I" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="J">J - Card Charges (EMI, Add-on Card)</label>
        <input type="number" id="J" value="530" step="0.01">
      </div>
      <div class="field">
        <label for="AC">AC - Health Card Charges</label>
        <input type="number" id="AC" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="AD">AD - Health Co-Brand Fee</label>
        <input type="number" id="AD" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="K">K - Co-branded Card Charges</label>
        <input type="number" id="K" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="L">L - BFL Share in Co-brand Card</label>
        <input type="number" id="L" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="M">M - Insta-Activation Fee</label>
        <input type="number" id="M" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="riskPool">N1 - Risk Pool Amount</label>
        <input type="number" id="riskPool" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="imps">N2 - IMPS Charges</label>
        <input type="number" id="imps" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="V">V - Mandate Registration Charges</label>
        <input type="number" id="V" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="U">U - Total GST</label>
        <input type="number" id="U" value="570" step="0.01">
      </div>
      <div class="field">
        <label for="AE">AE - Cash Repayment Charges</label>
        <input type="number" id="AE" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="AAB">AAB - Delivery Fee Borne by Customer</label>
        <input type="number" id="AAB" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="AAC">AAC - Delivery Fee Borne by Dealer</label>
        <input type="number" id="AAC" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="BBB">BBB - Insurance Charges</label>
        <input type="number" id="BBB" value="0" step="0.01">
      </div>
    </div>

    <!-- PROMO / CASHBACK / REWARDS -->
    <div class="section-title">Promo, Cashback & Rewards</div>
    <div class="grid">
      <div class="field">
        <label for="T">T - Total Promo (Value)</label>
        <input type="number" id="T" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="AB">AB - Cashback</label>
        <input type="number" id="AB" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="X">X - Reward Redemption Amount</label>
        <input type="number" id="X" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="XBA">XBA - Dealer Share on Dealer Reward</label>
        <input type="number" id="XBA" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="YA">YA - Any Extra Dealer Amount (if applicable)</label>
        <input type="number" id="YA" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="BA">BA - MKP Transaction Fees</label>
        <input type="number" id="BA" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="BB">BB - Payment Gateway Transaction Charges</label>
        <input type="number" id="BB" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="BC">BC - Online Downpayment Amount</label>
        <input type="number" id="BC" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="CS">CS - Credit Suraksha Fees</label>
        <input type="number" id="CS" value="0" step="0.01">
      </div>
    </div>

    <!-- TDS & DP -->
    <div class="section-title">TDS & Down Payment</div>
    <div class="grid">
      <div class="field">
        <label for="TDS">TDS (194-O – BFSD)</label>
        <input type="number" id="TDS" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="YY">YY - DP from Customer through BFL RBL Supercard</label>
        <input type="number" id="YY" value="0" step="0.01">
      </div>
      <div class="field">
        <label for="Y_input">Y (DP from Customer) - optional manual value</label>
        <input type="number" id="Y_input" value="15047" step="0.01">
      </div>
    </div>

    <!-- BUTTONS -->
    <div class="btn-row">
      <button class="btn-primary" onclick="calculateLoan()">Calculate</button>
      <button class="btn-secondary" onclick="resetForm()">Reset</button>
    </div>

    <!-- RESULTS -->
    <div class="results" id="results">
      <p><span class="inline highlight">D - Margin Money:</span> <span id="D_out">0.00</span></p>
      <p><span class="inline highlight">Y (calculated Down Payment from Customer):</span> <span id="Y_calc_out">0.00</span></p>
      <p><span class="inline highlight">Z - Total Deductions:</span> <span id="Z_out">0.00</span></p>
      <p><span class="inline highlight">AA - Net Disbursement:</span> <span id="AA_out">0.00</span></p>
      <p><span class="inline">Total of all EMIs (P × tenure):</span> <span id="total_emi_out">0.00</span></p>
    </div>

    <p style="font-size:0.8rem; margin-top:10px;">
      <strong>Formulas used:</strong><br>
      D (Margin Money) = A − B<br>
      Y (Down Payment) = D + E + F + G + J + AC + AD + K + M + (N1 + N2) + V + AAB + CS − X − T − YY<br>
      Z (Total Deductions) = D + E + F + G + H + I + J + AC + AD + L + M + (N1 + N2) + V + AE + AAC + BBB + AB + XBA + YA + BA + TDS + CS<br>
      AA (Net Disbursement) = A + X + YY − Z − TDS − CS − BB + BC
    </p>
  </div>

  <script>
    function v(id) {
      const val = parseFloat(document.getElementById(id).value);
      return isNaN(val) ? 0 : val;
    }

    function calculateLoan() {
      // Basic variables
      const A = v('A');
      const B = v('B');
      const C = v('C'); // not used in formula, but kept for display if needed

      const E = v('E');
      const F = v('F');
      const G = v('G');
      const H = v('H');
      const I = v('I');
      const J = v('J');
      const AC = v('AC');
      const AD = v('AD');
      const K = v('K');
      const L = v('L');
      const M = v('M');
      const riskPool = v('riskPool');
      const imps = v('imps');
      const Nsum = riskPool + imps;
      const V = v('V');
      const U = v('U'); // GST, not used directly in given formulas, but can be included if needed
      const AE = v('AE');
      const AAB = v('AAB');
      const AAC = v('AAC');
      const BBB = v('BBB');
      const AB = v('AB');
      const X = v('X');
      const XBA = v('XBA');
      const YA = v('YA');
      const BA = v('BA');
      const BB = v('BB');
      const BC = v('BC');
      const CS = v('CS');
      const TDS = v('TDS');
      const YY = v('YY');
      const T = v('T');

      const P = v('P');
      const tenure = v('tenure');

      // D: Margin Money
      const D = A - B;

      // Y (Down Payment) per formula
      const Y_calc = D + E + F + G + J + AC + AD + K + M + Nsum + V + AAB + CS - X - T - YY;

      // Z (Total Deductions) per formula
      const Z = D + E + F + G + H + I + J + AC + AD + L + M + Nsum + V + AE + AAC + BBB + AB + XBA + YA + BA + TDS + CS;

      // AA (Net Disbursement) per formula
      const AA = A + X + YY - Z - TDS - CS - BB + BC;

      // Total EMI paid over tenure
      const totalEmiPaid = P * tenure;

      // Output to DOM
      document.getElementById('D_out').textContent = D.toFixed(2);
      document.getElementById('Y_calc_out').textContent = Y_calc.toFixed(2);
      document.getElementById('Z_out').textContent = Z.toFixed(2);
      document.getElementById('AA_out').textContent = AA.toFixed(2);
      document.getElementById('total_emi_out').textContent = totalEmiPaid.toFixed(2);
    }

    function resetForm() {
      // Simply reloads the page to reset all default values
      location.reload();
    }

    // Auto-calc once on load with default values
    window.onload = calculateLoan;
  </script>
</body>
</html>
