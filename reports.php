<?php
$page_title = 'Account Statement';
include('includes/header.php');
?>

<link rel="stylesheet" href="assets/css/pages/reports.css">

<!-- === MAIN LAYOUT SECTION S === -->
<div class="bank-statement-wrapper">
    <div class="bank-statement-container">
        <!-- === HEADER SECTION S === -->
        <div class="statement-header">
            <h1 class="statement-title">Account Statement</h1>
            <a href="#" class="btn-download-invoice" id="openInvoiceBtn">Download Invoice</a>
        </div>
        <!-- === HEADER SECTION E === -->

        <!-- === TABLE SECTION S === -->
        <div class="statement-table-wrapper">
            <table class="statement-table">
                <thead>
                    <tr>
                        <th style="width: 50px;">Sno.</th>
                        <th>Paid via</th>
                        <th>Service</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Next Renewal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row-highlight">
                        <td>#1</td>
                        <td>Payment Gateway</td>
                        <td>Moz</td>
                        <td>₹ 100.00</td>
                        <td>17/02/2026</td>
                        <td>11:37:50 AM</td>
                        <td>18/05/2026</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- === TABLE SECTION E === -->
    </div>
</div>
<!-- === MAIN LAYOUT SECTION E === -->

<!-- === INVOICE MODAL SECTION S === -->
<div class="invoice-modal-overlay" id="invoiceModal">
    <div class="invoice-modal-container">
        <div class="invoice-modal-header">
            <h3 class="invoice-modal-title">Download Invoice</h3>
            <button class="invoice-modal-close" id="closeInvoiceX">&times;</button>
        </div>
        <div class="invoice-modal-body">
            <table class="invoice-table">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Service</th>
                        <th>Amount</th>
                        <th>Txn_id</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="row-blue">
                        <td>#1</td>
                        <td>Moz</td>
                        <td>₹ 100.00</td>
                        <td>1771308470</td>
                        <td>success</td>
                        <td>17/02/2026</td>
                        <td><a href="#" class="btn-download-action">Download</a></td>
                    </tr>
                    <tr class="row-blue">
                        <td>#2</td>
                        <td>Ahrefs</td>
                        <td>₹ 10.00</td>
                        <td>1742893722</td>
                        <td>success</td>
                        <td>25/03/2025</td>
                        <td><a href="#" class="btn-download-action">Download</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="invoice-modal-footer">
            <button class="btn-modal-close" id="closeInvoiceBtn">Close</button>
        </div>
    </div>
</div>
<!-- === INVOICE MODAL SECTION E === -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = document.getElementById('invoiceModal');
        var btn = document.getElementById('openInvoiceBtn');
        var closeBtn = document.getElementById('closeInvoiceBtn');
        var closeX = document.getElementById('closeInvoiceX');

        if(btn) {
            btn.onclick = function(e) {
                e.preventDefault();
                modal.classList.add('active');
            }
        }

        function closeModal() {
            modal.classList.remove('active');
        }

        if(closeBtn) closeBtn.onclick = closeModal;
        if(closeX) closeX.onclick = closeModal;

        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }
    });
</script>

<?php include('includes/footer2.php'); ?>
