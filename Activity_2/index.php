<?php declare(strict_types=1);

   
    define("PLATFORM_FEE_RATE", 0.15);
    define("FIXED_SERVICE_TAX", 250);
    $BaseRate = $_GET['BaseRate'] ?? '100000'; 
    $project_base_rate = (float)$BaseRate;
    $HoursRate = $_GET['HourlyRate'] ?? '50.10'; 
    $extra_hours_worked = (float)$HoursRate;
    $hourly_bonus_rate = 1.1 ;
    $bonus_pay = $extra_hours_worked * $hourly_bonus_rate;
    $gross_total = $project_base_rate + $bonus_pay;
    $fee_deduction = $gross_total * PLATFORM_FEE_RATE;
    $final_payout = $fee_deduction - FIXED_SERVICE_TAX;

    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Invoice System - Ticket #002-C</title>
    <style>
        :root { --accent: #00d2ff; --warning: #ff9f43; --dark-card: #1e272e; --body-bg: #0f1418; }
        body { font-family: 'Consolas', 'Monaco', monospace; background: var(--body-bg); color: #ecf0f1; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .invoice-box { background: var(--dark-card); padding: 35px; border-radius: 8px; border-top: 5px solid var(--accent); width: 100%; max-width: 550px; box-shadow: 0 20px 50px rgba(0,0,0,0.5); }
        .terminal-header { text-align: left; border-bottom: 1px solid #3d4e5d; margin-bottom: 25px; padding-bottom: 10px; }
        .terminal-header h2 { margin: 0; color: var(--accent); font-size: 1.4em; }
        .data-grid { display: grid; grid-template-columns: 1fr; gap: 15px; }
        .item { display: flex; justify-content: space-between; padding: 10px; background: rgba(255,255,255,0.03); border-radius: 4px; }
        .label { color: #95a5a6; text-transform: uppercase; font-size: 0.85em; }
        .amount { color: #fff; font-weight: bold; }
        .total-section { margin-top: 25px; padding: 20px; background: rgba(0, 210, 255, 0.1); border-radius: 4px; border: 1px solid var(--accent); }
        .payout-label { display: block; color: var(--accent); font-size: 0.9em; margin-bottom: 5px; }
        .payout-value { font-size: 1.8em; font-weight: bold; color: #fff; }
        .debug-console { background: #000; color: #55efc4; padding: 15px; border-radius: 4px; margin-top: 25px; font-size: 0.8em; line-height: 1.6; }
        .debug-tag { color: var(--warning); font-weight: bold; }
    </style>
</head>
<body>

    <div class="invoice-box">
        <div class="terminal-header">
            <h2>> INVOICE_GENERATOR_V1.0</h2>
            <small style="color: #576574;">Block C / Junior Dev Environment</small>
        </div>
       
        <div class="data-grid">
            <div class="item">
                <span class="label">Project Base Rate:</span>
                <span class="amount">
                   <!-- Display Value Here -->
                    <?php 
                     echo "₱ ";
                    echo number_format(num: $project_base_rate, decimals: 2);
                    ?>
            </div>

            <div class="item">
                <span class="label">Gross Project Total:</span>
                <span class="amount">
                    <!-- Display Value Here -->
                     <?php 
                     echo "₱ ";
                    echo number_format(num: $gross_total, decimals: 2);
                    ?>
                </span>
            </div>

            <div class="item">
                <span class="label">Platform Fee Deduction:</span>
                <span class="amount" style="color: #ff7675;">
                    <!-- Display Value Here -->
                      <?php
                       echo "₱ ";
                    echo number_format(num: $fee_deduction, decimals: 2);
                    ?>
                </span>
            </div>
        </div>

        <div class="total-section">
            <span class="payout-label">FINAL NET PAYOUT:</span>
            <div class="payout-value">
                <!-- Display Value Here -->
                  <?php 
                     echo "₱ ";
                    echo number_format(num: $final_payout, decimals: 2);
                    ?>
            </div>
        </div>

        <div class="debug-console">
            <div><span class="debug-tag">[SYS_COMPARE]</span> FEE_VS_TAX_SPACESHIP: 
            <!-- Display Value Here -->
             <?php

                    echo $fee_deduction <=> FIXED_SERVICE_TAX;
             
             ?>
        </div>
            <div><span class="debug-tag">[SYS_IDENTITY]</span> FLOAT_VS_INT_CHECK: 
            <?php 
                   if(500.0 === 500){

                    echo "True";
                   }
                   {
                    echo "False";
                   }
                    ?>
        
        </div>
            <div style="margin-top: 10px;">> DEPLOYMENT_STATUS: SUCCESSFUL</div>
        </div>
    </div>

</body>
</html>      
