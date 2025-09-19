@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Book Now
@stop

@section('css')
   <style>
        /* * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            position: relative;
        }
        
        .header {
            background: linear-gradient(to bottom right, #4a6491 0%, #f14246 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: white;
        }
        
        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
            color: white;
        } */
        
        .form-container {
            padding: 30px;
        }
        .form-step h2 {
            color: var(--black);  
            margin: 20px 0px;
            font-weight: 600;
        }
                
        #booking-form {
            padding-top: 25px;
            border-top: 1px solid #0000001a;
        }
        
        .progress-bar {
            display: flex;
            flex-direction: row!important;
            justify-content: space-between!important;
            margin-bottom: 50px;
            position: relative;
            overflow: visible;
        }
        
        .progress-bar::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background: #f0f0f0;
            z-index: 1;
        }
        
        .progress-bar::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: var(--progress, 0%);
            background: #f14246;
            transition: width 0.5s ease;
            z-index: 1;
        }
        
        .step {
            width: 40px;
            height: 40px;
            background: #f0f0f0;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            position: relative;
            z-index: 2;
            transition: background 0.5s ease, color 0.5s ease;
        }
        
        .step span {
            color: #333;
        }
        
        .step.active {
            background: #f14246;
            color: white;
        }
        
        .step.active span {
            color: white;
        }
        
        .step-label {
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            font-size: 0.9rem;
            color: #777;
        }
        
        .step.active .step-label {
            color: #f14246;
            font-weight: bold;
        }
        
        .form-step {
            display: none;
            animation: fadeIn 0.5s ease forwards;
        }
        
        .form-step.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .input-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #444;
        }
        
        input,
        select,
        textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 5px!important;
            font-size: 1rem;
            transition: border 0.3s ease;
        }
        
        input:focus,
        select:focus,
        textarea:focus {
            border-color: #f14246;
            outline: none;
        }
        
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }
        
        .service-cards {
            /* display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); */
            gap: 20px;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
        }
        
        .service-card {
            border: 2px solid #eee;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 0px;
            position: relative;
            overflow: visible!important;
            width: calc((100% / 4) - 20px);
        }
        
        .service-card p {
            min-height: 60px;
            display: flex;
            justify-content: center;
            align-items: start;
        }
        
        .location-card .img-title {
            background: #eee;
            width: 100%;
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        
        .location-card .img {
            width: 50px;
            height: 50px;
        }
        
        .location-card .img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .location-card p {
            font-size: 18px;
            color: black;
            font-weight: 500;
            margin-bottom: 10px;
            color: #666;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
        }
        
        .location-card p i {
            width: 30px;
            background: var(--secondary);
            border-radius: 50%;
            aspect-ratio: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 14px;
        }
        
        .service-card .check-icon i,
        .location-card .check-icon i {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            border: 3px solid white;
            font-size: 18px;
            font-weight: 600;
            background: var(--secondary);
            z-index: 2;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .service-card.selected {
            border-color: var(--secondary);
            background: var(--secondary);
        }
        
        .service-card.selected .icon-img img {
            filter: brightness(0) invert(1);
        }
        
        .service-card.selected h3,
        .service-card.selected p {
            color: white;
        }
        
        .service-card .icon-img {
            width: 50px;
            height: 50px;
            margin-bottom: 15px;
        }
        
        .service-card .icon-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        
        .location-card h3,
        .service-card h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 20px;
        }
        
        .location-card p,
        .service-card p {
            font-size: 18px;
            color: #666;
        }
        
        .location-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .location-card {
            border: 2px solid #eee;
            border-radius: 15px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .location-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .location-card.selected {
            border-color: var(--secondary);
            background: var(--secondary);
        }
        
        .location-card.selected p i {
            color: var(--secondary);
            background: white;
        }
        
        .location-card.selected h3 {
            color: black;
        }
        
        .location-card.selected p {
            color: white;
        }
        
        .location-card.selected .capacity-fill {
            background: linear-gradient(90deg, var(--black) 0%, var(--black) 100%);
        }
        
        .location-card h3 i {
            margin-right: 10px;
        }
        
        .floor-capacity {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px dashed #ddd;
        }
        
        .capacity-label {
            font-weight: 600;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }
        
        .capacity-bar {
            height: 8px;
            background: #f0f0f0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 8px;
        }
        
        .capacity-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--secondary) 0%, var(--secondary) 100%);
            border-radius: 4px;
            transition: width 0.5s ease;
        }
        
        .capacity-status {
            font-size: 0.85rem;
            color: #666;
        }
        
        .location-card.selected .capacity-label,
        .location-card.selected .capacity-status {
            color: white;
        }
        
        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
            border-bottom: 1px solid #0000002b;
        }
        
        .summary-item span {
            color: #333;
            font-weight: 600;
        }
        
        .summary-total {
            display: flex;
            justify-content: space-between;
            padding: 20px 0;
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
        }
        
        .success-animation {
            text-align: center;
            padding: 40px 0;
        }
        
        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: block;
            stroke-width: 5;
            stroke: #f14246;
            stroke-miterlimit: 10;
            margin: 0 auto;
            box-shadow: 0 0 0 rgba(74, 100, 145, 0.5);
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
        }
        
        .offset-button a {
            display: inline-block;
            padding: 15px 30px;
            background: #f14246;
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .offset-button a:hover {
            opacity: 0.9;
            transform: translateY(-3px);
        }
        
        @keyframes fill {
            100% {
                box-shadow: 0 0 20px rgba(74, 100, 145, 0.2);
            }
        }
        
        @keyframes scale {
            0%,
            100% {
                transform: none;
            }
            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }
        
        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
            .service-cards,
            .location-cards {
                grid-template-columns: 1fr;
            }
            .btn-group {
                flex-direction: column;
                gap: 15px;
            }
            .offset-button a {
                width: 100%;
                text-align: center;
            }
        }
        
        .floor-info {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 10px;
            border-left: 4px solid #f14246;
        }
        
        .floor-info h4 {
            margin-bottom: 10px;
            color: #333;
        }
        
        .floor-info p {
            color: #666;
            margin-bottom: 5px;
        }
        
        .steps-custom-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            margin: 100px 0px;
        }
        
        .header__navicon .side-toggle {
            color: black;
        }
        
        .menu-icon .line {
            background-color: black;
        }
        
        .transperent-button {
            background: var(--secondary);
            border: 1px solid var(--secondary);
        }
        
        .transperent-button:hover {
            border: 1px solid var(--black);
        }
        
        .rr-btn:hover::before {
            background-color: #f8f8f8;
        }
        
        .steps-custom-form .form-title-para {
            padding: 30px;
            background: white;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }
        
        .datetime-container {
            background: #eee;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            display: flex;
            width: 100%;
            gap: 25px;
            position: relative;
        }
        
        .datetime-container .second-form {
            display: flex;
            justify-content: start;
            align-items: start;
            gap: 20px;
            width: 100%;
        }
        
        .datetime-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 50%;
        }
        
        .second-form .selected-main {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 20px;
            background: var(--secondary);
            padding: 12px;
            border-radius: 10px;
            position: relative;
            width: 70%;
        }
        
        .second-form .selected-main .selected-service {
            display: flex;
            gap: 20px;
        }
        
        .selected-main i {
            position: absolute;
            right: 20px;
            font-size: 18px;
            color: white;
            z-index: 99;
            top: -20px;
            background: var(--secondary);
            border-radius: 50%;
            padding: 7px;
            border: 3px solid white;
            font-weight: bold;
        }
        
        .selected-service .selected-img {
            width: 40px;
            height: 40px;
        }
        
        .selected-service .selected-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: invert(1) brightness(2);
        }
        
        .selected-service h3 {
            font-weight: 600;
            font-size: 20px;
            color: var(--white);
        }
        
        .selected-service p {
            font-size: 17px;
            color: var(--white);
            font-weight: 400;
        }
        
        .select-date-time {
            display: flex;
            gap: 10px;
            width: 100%;
        }
        
        .select-date-time .form-group {
            width: 50%;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--black);
        }
        
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border 0.3s;
        }
        
        .form-group input:focus,
        .form-group select:focus {
            border-color: var(--secondary);
            outline: none;
        }
        
        .time-slots {
            width: 50%;
            display: flex;
            justify-content: end;
            flex-direction: column;
            margin-bottom: 35px;
        }
        
        .time-slots h3 {
            font-size: 1.2rem;
            color: var(--black);
        }
        
        .slots-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            width: 100%;
            padding: 10px;
            background: white;
            border-radius: 10px;
        }
        
        .slots-container p {
            font-weight: 400;
            font-size: 18px;
        }
        
        .time-slot {
            padding: 12px;
            text-align: center;
            background: white;
            border: 2px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            width: calc((100% /4) - 10px);
            color: var(--black);
        }
        
        .time-slot:hover {
            border-color: var(--secondary);
        }
        
        .time-slot.selected {
            background: var(--secondary);
            color: white;
            border-color: var(--secondary);
        }
        
        .time-slot.booked {
            background: #ffebee;
            color: #c62828;
            border-color: #ffcdd2;
            cursor: not-allowed;
            text-decoration: line-through;
        }
        
        .membership-main {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 20px;
            width: 100%;
            flex-wrap: wrap;
        }
        
        .membership-main .membership-card {
            width: calc((100% / 3) - 20px);
            background: #eee;
            padding: 30px 35px;
            border-radius: 0px 0px 0px 80px;
            border: 1px solid #00000021;
            /* border: 4p solid transparent; */
        }
        
        .membership-main .membership-card ul {
            min-height: 145px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: start;
            gap: 10px;
        }
        
        .membership-main .membership-card.active {
            border: 4px solid var(--secondary);
        }
        
        .membership-main .membership-card .border-line {
            border: 1px solid #0000001a;
            margin: 20px 0px;
        }
        
        .membership-main .membership-card ul .icon-heading {
            display: flex;
            gap: 10px;
            width: 100%;
        }
        
        .membership-main .membership-card ul .icon-heading p {
            font-size: 14px;
            color: var(--bs-body-color);
        }
        
        .membership-main .membership-card .membership-card-img {
            height: 65px;
            width: 65px;
        }
        
        .membership-main .membership-card .membership-img-title {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .membership-main .membership-card .membership-card-img img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
        
        .membership-main .membership-card .membership-service-title {
            font-size: 19px;
            font-weight: 600;
            color: var(--black);
        }
        
        .membership-main .membership-card .membership-service-title .membership-img-title {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .membership-options .radio-input {
            display: flex;
            justify-content: space-between;
            width: 100%;
            gap: 5px;
        }
        
        .membership-options .radio-input input {
            width: 8%;
            aspect-ratio: 1;
            cursor: pointer;
        }
        
        .membership-options .radio-input p {
            font-size: 12px;
            width: 92%;
            line-height: 1;
            color: var(--bs-body-color);
            display: flex;
            gap: 5px;
        }
        
        .membership-options .radio-input p strong {
            font-size: 15px;
            color: var(--secondary);
        }
        
        @media (max-width: 1550px) {
            .service-cards {
                gap: 10px;
            }
            .service-card {
                padding: 10px;
                width: calc((100% / 4) - 10px);
            }
            .location-card p,
            .service-card p {
                font-size: 16px;
                line-height: 1.2;
            }
            .location-card h3,
            .service-card h3 {
                font-size: 18px;
            }
            .service-card .icon-img {
                width: 40px!important;
                height: 40px!important;
            }
            .steps-custom-form .section-title {
                font-size: 40px;
            }
        }
    </style>
@stop

@section('content')

    <section class="steps-custom-form">
        <div class="container">
            <div class="row">
                <div class="form-title-para">
                    <h1 class="section-title text-center font-instrumentsans-medium word-anim">UK Coworking Spaces</h1>
                    <p class="text text-black">Book your perfect workspace across our 3 premium UK locations</p>
                </div>

                <div class="form-container">
                    <div class="progress-bar">
                        <div class="step active"><span>1</span>
                            <div class="step-label">Service</div>
                        </div>
                        <div class="step"><span>2</span>
                            <div class="step-label">Floors</div>
                        </div>
                        <div class="step"><span>3</span>
                            <div class="step-label">Details</div>
                        </div>
                        <div class="step"><span>4</span>
                            <div class="step-label">Confirm</div>
                        </div>
                    </div>

                    <form id="booking-form">
                        <!-- Step 1: Service Selection -->
                        <div class="form-step active" id="step-1">
                            <h2>Choose your membership plan</h2>
                            <div class="membership-container">
                                <div class="membership-main">

                                    <!-- Coworking Card -->
                                    <div class="membership-card" data-service="Coworking">
                                        <div class="membership-img-title mb-lg-4 mb-3">
                                            <div class="membership-card-img">
                                                <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutioncoworking.svg" alt="">
                                            </div>
                                            <span class="membership-service-title">Coworking</span>
                                        </div>
                                        <ul>
                                            <li class="icon-heading">
                                                <img src="https://www.regus.com/en-gb/membership/office-checkout-page/assets/images/plan-icons/icon-table-small.svg" alt="">
                                                <p>Coworking access</p>
                                            </li>
                                            <li class="icon-heading">
                                                <img src="https://www.regus.com/en-gb/membership/office-checkout-page/assets/images/plan-icons/icon-vo-small.svg" alt="">
                                                <p>Live Receptionist Services</p>
                                            </li>
                                            <li class="icon-heading">
                                                <img src="https://www.regus.com/en-gb/membership/office-checkout-page/assets/images/plan-icons/icon-app-small.svg" alt="">
                                                <p>Book your days with the app</p>
                                            </li>
                                        </ul>
                                        <div class="border-line"></div>
                                        <div class="membership-options">
                                            <label class="radio-input">
                                                <p><strong>From PKR 11500</strong>/pp, 5 days a month</p>
                                                <input type="radio" name="coworking" value="PKR 11500 - 5 days/month">
                                            </label>
                                            <label class="radio-input">
                                                <p><strong>From PKR 17500</strong>/pp, 10 days a month</p>
                                                <input type="radio" name="coworking" value="PKR 17500 - 10 days/month">
                                            </label>
                                            <label class="radio-input">
                                                <p><strong>From PKR 26500</strong>/pp, unlimited</p>
                                                <input type="radio" name="coworking" value="PKR 26500 - unlimited">
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Office Card -->
                                    <div class="membership-card" data-service="Office">
                                        <div class="membership-img-title mb-lg-4 mb-3">
                                            <div class="membership-card-img">
                                                <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionofficespace.svg" alt="">
                                            </div>
                                            <span class="membership-service-title">Office</span>
                                        </div>
                                        <ul>
                                            <li class="icon-heading">
                                                <img src="https://www.regus.com/en-gb/membership/office-checkout-page/assets/images/plan-icons/icon-lamp-and-sofa-small.svg" alt="">
                                                <p>All of Coworking</p>
                                            </li>
                                            <li class="icon-heading">
                                                <img src="https://www.regus.com/en-gb/membership/office-checkout-page/assets/images/plan-icons/icon-private-access-small.svg" alt="">
                                                <p>Private Office access</p>
                                            </li>
                                            <li class="icon-heading">
                                                <img src="https://www.regus.com/en-gb/membership/office-checkout-page/assets/images/plan-icons/icon-office-cleaning-small.svg" alt="">
                                                <p>Office cleaning and maintenance</p>
                                            </li>
                                            <li class="icon-heading">
                                                <img src="https://www.regus.com/en-gb/membership/office-checkout-page/assets/images/plan-icons/icon-app-small.svg" alt="">
                                                <p>Book your days with the app</p>
                                            </li>
                                        </ul>
                                        <div class="border-line"></div>
                                        <div class="membership-options">
                                            <label class="radio-input">
                                                <p><strong>From PKR 11500</strong>/pp, 5 days a month</p>
                                                <input type="radio" name="coworking" value="PKR 11500 - 5 days/month">
                                            </label>
                                            <label class="radio-input">
                                                <p><strong>From PKR 17500</strong>/pp, 10 days a month</p>
                                                <input type="radio" name="coworking" value="PKR 17500 - 10 days/month">
                                            </label>
                                            <label class="radio-input">
                                                <p><strong>From PKR 26500</strong>/pp, unlimited</p>
                                                <input type="radio" name="coworking" value="PKR 26500 - unlimited">
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="btn-group justify-content-end w-100">
                                <button class="rr-btn next-btn">
                                    <span class="btn-wrap">
                                    <span class="text-one">Next</span>
                                    <span class="text-two">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <!-- Step 2: Floor Selection -->
                        <div class="form-step" id="step-2">
                            <h2>Select Your Preferred Floor</h2>

                            <div class="floor-info">
                                <h4>Available Floors for <span id="selected-service-name">[Service]</span></h4>
                                <p>Based on your service selection, these are the available floors with suitable workspaces.</p>
                            </div>

                            <div class="location-cards">
                                <!-- First Floor - Available for all services -->
                                <div class="location-card" data-location="firstfloor" data-available-services="office,coworking,private-office,meeting-room,event-space">
                                    <div class="img-title">
                                        <div class="img">
                                            <img src="https://cdn-icons-png.flaticon.com/512/9512/9512315.png" alt="">
                                        </div>
                                        <h3> First Floor</h3>
                                    </div>
                                    <p><i class="fas fa-users"></i> Collaborative Workspace</p>
                                    <p><i class="fas fa-coffee"></i> Coffee Bar & Lounge</p>
                                    <p><i class="fas fa-lightbulb"></i> Natural Lighting</p>
                                    <div class="floor-capacity">
                                        <span class="capacity-label">Capacity: 40 people</span>
                                        <div class="capacity-bar">
                                            <div class="capacity-fill" style="width: 70%"></div>
                                        </div>
                                        <span class="capacity-status">Moderate occupancy</span>
                                    </div>
                                </div>

                                <!-- Second Floor - Available for office, private-office, meeting-room -->
                                <div class="location-card" data-location="secondfloor" data-available-services="office,private-office,meeting-room">
                                    <div class="img-title">
                                        <div class="img">
                                            <img src="https://cdn-icons-png.flaticon.com/512/9512/9512315.png" alt="">
                                        </div>
                                        <h3> Second Floor</h3>
                                    </div>
                                    <p><i class="fas fa-door-closed"></i> Private Offices</p>
                                    <p><i class="fas fa-wifi"></i> Premium Internet</p>
                                    <p><i class="fas fa-concierge-bell"></i> Dedicated Support</p>
                                    <div class="floor-capacity">
                                        <span class="capacity-label">Capacity: 30 people</span>
                                        <div class="capacity-bar">
                                            <div class="capacity-fill" style="width: 40%"></div>
                                        </div>
                                        <span class="capacity-status">Low occupancy</span>
                                    </div>
                                </div>

                                <!-- Third Floor - Available for meeting-room and event-space only -->
                                <div class="location-card" data-location="thirdfloor" data-available-services="meeting-room,event-space">
                                    <div class="img-title">
                                        <div class="img">
                                            <img src="https://cdn-icons-png.flaticon.com/512/9512/9512315.png" alt="">
                                        </div>
                                        <h3> Third Floor</h3>
                                    </div>
                                    <p><i class="fas fa-chalkboard"></i> Meeting Rooms</p>
                                    <p><i class="fas fa-projector"></i> Presentation Equipment</p>
                                    <p><i class="fas fa-couch"></i> Premium Furniture</p>
                                    <div class="floor-capacity">
                                        <span class="capacity-label">Capacity: 25 people</span>
                                        <div class="capacity-bar">
                                            <div class="capacity-fill" style="width: 90%"></div>
                                        </div>
                                        <span class="capacity-status">High occupancy</span>
                                    </div>
                                </div>
                            </div>

                            <div class="btn-group">
                                <div class="rr-btn prev-btn">
                                    <span class="btn-wrap">
                                    <span class="text-one">Previous</span>
                                    <span class="text-two">Previous</span>
                                    </span>
                                </div>
                                <div class="rr-btn next-btn">
                                    <span class="btn-wrap">
                                    <span class="text-one">Next</span>
                                    <span class="text-two">Next</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Details -->
                        <div class="form-step" id="step-3">
                            <h2>Enter Your Details</h2>
                            <div class="form-grid">
                                <div class="input-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" id="firstname" required>
                                </div>
                                <div class="input-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" id="lastname" required>
                                </div>
                                <div class="input-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" required>
                                </div>
                                <div class="input-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" required>
                                </div>
                                <div class="input-group">
                                    <label for="company">Company Name</label>
                                    <input type="text" id="company">
                                </div>
                                <div class="input-group">
                                    <label for="duration">Preferred Duration</label>
                                    <select id="duration">
                                    <option value="">Select duration</option>
                                    <option value="1-month">1 Month</option>
                                    <option value="3-months">3 Months</option>
                                    <option value="6-months">6 Months</option>
                                    <option value="1-year">1 Year</option>
                                    <option value="flexible">Flexible</option>
                                </select>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="message">Additional Requirements</label>
                                <textarea id="message" rows="4" placeholder="Any specific requirements or questions..."></textarea>
                            </div>
                            <div class="btn-group">
                                <div class="rr-btn prev-btn">
                                    <span class="btn-wrap">
                                    <span class="text-one">Previous</span>
                                    <span class="text-two">Previous</span>
                                    </span>
                                </div>
                                <div class="rr-btn next-btn">
                                    <span class="btn-wrap">
                                    <span class="text-one">Next</span>
                                    <span class="text-two">Next</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4: Confirmation -->
                        <div class="form-step" id="step-4">
                            <h2>Confirm Your Booking Request</h2>
                            <div class="summary">
                                <div class="summary-item">
                                    <span>Service:</span>
                                    <span id="summary-service">Coworking Space</span>
                                </div>
                                <div class="summary-item">
                                    <span>Floor:</span>
                                    <span id="summary-floor">First Floor</span>
                                </div>
                                <div class="summary-item">
                                    <span>Name:</span>
                                    <span id="summary-name">John Doe</span>
                                </div>
                                <div class="summary-item">
                                    <span>Email:</span>
                                    <span id="summary-email">john@example.com</span>
                                </div>
                                <div class="summary-item">
                                    <span>Phone:</span>
                                    <span id="summary-phone">+1234567890</span>
                                </div>
                                <div class="summary-item">
                                    <span>Company:</span>
                                    <span id="summary-company">ABC Corp</span>
                                </div>
                                <div class="summary-item">
                                    <span>Duration:</span>
                                    <span id="summary-duration">3 Months</span>
                                </div>
                            </div>
                            <div class="btn-group">
                                <div class="rr-btn prev-btn">
                                    <span class="btn-wrap">
                                    <span class="text-one">Previous</span>
                                    <span class="text-two">Previous</span>
                                    </span>
                                </div>
                                <div class="rr-btn submit-btn">
                                    <span class="btn-wrap">
                                    <span class="text-one">Submit Booking</span>
                                    <span class="text-two">Submit Booking</span>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Success Message (initially hidden) -->
                        <div class="form-step" id="step-5">
                            <div class="success-animation">
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                            </svg>
                                <h2>Booking Request Received!</h2>
                                <p>Thank you for your interest in our coworking spaces. We've received your request and our team will contact you within 24 hours to confirm availability and complete your booking.</p>
                                <p>We look forward to welcoming you to our space!</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop

@section('js')
 <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        $(document).ready(function() {
            let $slides = $(".hero-slider .slide");
            let currentIndex = 0;

            $slides.eq(currentIndex).addClass("active");

            setInterval(function() {
                $slides.eq(currentIndex).removeClass("active");
                currentIndex = (currentIndex + 1) % $slides.length;
                $slides.eq(currentIndex).addClass("active");
            }, 5000); // 5 seconds


            $("#currentYear").text(new Date().getFullYear());
        });

        $(document).ready(function() {
            var colors = ["#0495f3", "#f14246", "#f6861f", "#52b347"];

            $(".text-slider-item .title i").each(function() {
                var randomColor = colors[Math.floor(Math.random() * colors.length)];
                $(this).css("background", randomColor);
            });
        });

        $(document).ready(function() {
            var colors = ["#0495f3", "#f14246", "#f6861f", "#52b347"];

            $(".client-area .client-box").each(function() {
                var randomColor = colors[Math.floor(Math.random() * colors.length)];
                $(this).css("background-color", randomColor);
            });
        });

        $(document).mousemove(function(event) {
            $(".eye").each(function() {
                var eye = $(this);
                var x = eye.offset().left + eye.width() / 2;
                var y = eye.offset().top + eye.height() / 2;
                var rad = Math.atan2(event.pageX - x, event.pageY - y);
                var rot = (rad * (180 / Math.PI) * -1) + 180;
                eye.css({
                    'transform': 'rotate(' + rot + 'deg)'
                });
            });
        });

        jQuery(document).ready(function($) {
            var animationDelay = 2500;
            var revealDuration = 600;
            var revealAnimationDelay = 1000;

            // Define your color list
            var colors = ['#f14246', '#f6861f', '#0495f3', '#52b347'];

            function animateHeadline($headlines) {
                $headlines.each(function() {
                    var headline = $(this);

                    if (headline.hasClass('clip')) {
                        var spanWrapper = headline.find('.cd-words-wrapper'),
                            newWidth = spanWrapper.width() + 10;
                        spanWrapper.css('width', newWidth);
                    }

                    setTimeout(function() {
                        hideWord(headline.find('.is-visible').eq(0));
                    }, animationDelay);
                });
            }

            function hideWord($word) {
                var nextWord = takeNext($word);

                if ($word.parents('.cd-headline').hasClass('clip')) {
                    $word.parents('.cd-words-wrapper').animate({
                        width: '2px'
                    }, revealDuration, function() {
                        switchWord($word, nextWord);
                        showWord(nextWord);
                    });
                }
            }

            function showWord($word) {
                if ($word.parents('.cd-headline').hasClass('clip')) {
                    var wordIndex = $word.index();
                    var color = colors[wordIndex % colors.length];

                    // Apply color to word
                    $word.css('color', color);

                    // Apply same color to blinking cursor
                    $word.siblings('.cursor').css('background-color', color);

                    // Animate word reveal
                    $word.parents('.cd-words-wrapper').animate({
                        'width': $word.width() + 10
                    }, revealDuration, function() {
                        // Blink eyes on each new word
                        blinkEyes();

                        setTimeout(function() {
                            hideWord($word);
                        }, revealAnimationDelay);
                    });
                }
            }

            function takeNext($word) {
                return (!$word.is(':last-child')) ? $word.next() : $word.parent().children('b').eq(0);
            }

            function switchWord($oldWord, $newWord) {
                $oldWord.removeClass('is-visible').addClass('is-hidden');
                $newWord.removeClass('is-hidden').addClass('is-visible');
            }

            // Eye blink trigger
            function blinkEyes() {
                $(".eye").addClass("blink");
                setTimeout(function() {
                    $(".eye").removeClass("blink");
                }, 300);
            }

            animateHeadline($('.cd-headline'));
        });
    </script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>

    <script>
        let currentStep = 1;
        const totalSteps = 4;
        const bookingData = {
            service: null,
            date: null,
            timeFrom: null,
            timeUntil: null,
            people: null,
            firstName: null,
            lastName: null,
            email: null,
            phone: null,
            notes: null
        };
        $(document).ready(function() {
            // Jab bhi koi radio select ho
            $(".membership-card input[type='radio']").on("change", function() {
                // Sab cards se active hata do
                $(".membership-card").removeClass("active");

                // Sirf is radio ke parent card ko active do
                $(this).closest(".membership-card").addClass("active");
            });
        });

        $(document).ready(function() {
            // 📌 Set min date to today
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            const todayStr = `${yyyy}-${mm}-${dd}`;
            $("#booking-date").attr("min", todayStr).val(todayStr);

            // 📌 Service card selection
            $(".service-card").on("click", function() {
                $(".service-card").removeClass("selected");
                $(this).addClass("selected");
                bookingData.service = $(this).data("service");
            });

            // 📌 Next button
            $(".next-btn").on("click", function() {
                let step = currentStep;
                if (step === 1 && !validateStep1()) return;
                if (step === 2 && !validateStep2()) return;
                if (step === 3 && !validateStep3()) return;

                $(`#step-${step}`).removeClass("active");
                $(`#step-${step + 1}`).addClass("active");

                $(".step").eq(step - 1).removeClass("active").addClass("completed");
                $(".step").eq(step).addClass("active");

                $(".progress-bar").css("--progress", ((step / totalSteps) * 100) + "%");

                if (step === 3) updateSummary();

                currentStep++;
            });

            // 📌 Prev button
            $(".prev-btn").on("click", function() {
                let step = currentStep;

                $(`#step-${step}`).removeClass("active");
                $(`#step-${step - 1}`).addClass("active");

                $(".step").eq(step - 1).removeClass("active");
                $(".step").eq(step - 2).removeClass("completed").addClass("active");

                $(".progress-bar").css("--progress", (((step - 2) / totalSteps) * 100) + "%");

                currentStep--;
            });

            // 📌 Submit button
            $("#submit-btn").on("click", function() {
                console.log("Booking submitted:", bookingData);

                const refNumber = Math.floor(1000 + Math.random() * 9000);
                $("#booking-ref").text(`QS-2023-${refNumber}`);

                $("#step-4").removeClass("active");
                $("#step-5").addClass("active");

                $(".step").addClass("completed");
                $(".progress-bar").css("--progress", "100%");
            });
        });

        // 📌 Step 1 Validation
        function validateStep1() {
            let selectedService = $(".membership-card input[type='radio']:checked").val();
            $(".membership-card").addClass('active');

            if (!selectedService) {
                alert("Please select a membership plan");
                return false;
            }

            // Save data
            bookingData.service = selectedService;

            return true;
        }

        // 📌 Step 2 Validation
        function validateStep2() {
            if (!bookingData.date || !bookingData.timeFrom || !bookingData.timeUntil || !bookingData.people) {
                alert("Please complete date, time and people fields");
                return false;
            }
            return true;
        }

        // 📌 Step 3 Validation
        function validateStep3() {
            let firstName = $("#first-name").val();
            let lastName = $("#last-name").val();
            let email = $("#email").val();
            let phone = $("#phone").val();

            if (!firstName || !lastName || !email || !phone) {
                alert("Please fill in all required fields");
                return false;
            }

            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email");
                return false;
            }

            bookingData.firstName = firstName;
            bookingData.lastName = lastName;
            bookingData.email = email;
            bookingData.phone = phone;
            bookingData.notes = $("#notes").val();

            return true;
        }

        // 📌 Update Summary
        function updateSummary() {
            $("#summary-service").text($(".service-card.selected h3").text());
            $("#summary-date").text(formatDateDisplay(bookingData.date));
            $("#summary-time").text(`${bookingData.timeFrom} - ${bookingData.timeUntil}`);
            $("#summary-duration").text(`${bookingData.people} People`);
            $("#summary-name").text(`${bookingData.firstName} ${bookingData.lastName}`);
            $("#summary-email").text(bookingData.email);
            $("#summary-phone").text(bookingData.phone);
        }

        function formatDateDisplay(dateString) {
            return new Date(dateString).toLocaleDateString("en-US", {
                year: "numeric",
                month: "long",
                day: "numeric"
            });
        }
    </script>
@stop 