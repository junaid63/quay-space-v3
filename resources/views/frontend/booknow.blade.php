@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Book Now
@stop

@section('css')
    <style>
        .form-container {
            padding: 30px;
        }
        
        #booking-form {
            border-top: 1px solid #0000001a;
        }
        
        .progress-bar {
            display: flex;
            flex-direction: row!important;
            justify-content: space-between!important;
            margin-bottom: 50px;
            position: relative;
            overflow: visible!important;
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
        .step.completed {
            background: #f14246;
        }
        .step.completed span {
            color: white
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
        .form-step h2 {
            color: var(--black);
            margin: 20px 0px;
            font-weight: 600;
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
            width: calc((100% / 2) - 20px) !important;
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
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
            width: 100%;
        }
        
        .btn-group {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            width: 100%;
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
            background: var(--secondary);
            width: 100%;
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        
        .location-card .img {
            width: 50px;
            height: 50px;
        }

        .location-card.active {
            background: var(--secondary);
        }
        .location-card.active ul {
            background: var(--secondary);
        }
        .location-card .img-title {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 25px;
        }
        .location-card.active .img-title {
            background: var(--white);
        }
        .location-card.active .img-title h3 {
            color: var(--black);
        }
        .location-card.active .img-title .img img {
            filter: invert(1) brightness(0);
        }
        .location-card.active .check-icon {
            position: absolute;
            top: -20px;
            right: 20px;
            font-size: 30px;
            border-radius: 50%;
            border: 3px solid white;
            background: white;
        }
        .location-card.active p {
            color: var(--white);
        }
        .location-card.active p i {
            background: var(--white);
            color: var(--secondary);
        }
        .location-card.active .floor-capacity span {
            color: var(--white);
        }
        .location-card.active .floor-capacity .capacity-bar .capacity-fill {
            background: var(--black);
        }
        
        .location-card .img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            filter: invert(1) brightness(2);
        }
        
        .location-card p {
            font-size: 16px;
            color: black;
            font-weight: 500;
            margin-bottom: 10px;
            color: #666;
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 10px;
        }
        .location-card ul {
            padding: 5px 20px;
            border-left: 2px solid var(--secondary);
            border-radius: 9px;
            background: #eee;
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
            color: var(--white);
            font-size: 25px;
            font-weight: 600;
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
            font-weight: 600;
        }
        
        .floor-info p {
            color: #666;
            margin-bottom: 5px;
            font-size: 20px;
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
        
        .datetime-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 50%;
        }
        
        .selected-service {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 20px;
            background: var(--secondary);
            padding: 10px;
            border-radius: 10px;
            position: relative;
        }
        
        .selected-service i {
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
            gap: 5px;
            margin-bottom: 20px;
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
        .header__navicon .side-toggle {
            color: var(--black)!important;
        }
        .menu-icon .line {
            background-color: var(--black)!important;
        }
        .rr-btn.transperent-button {
            background: var(--secondary);
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
                            <h2>Select Date & Time</h2>
                            <div class="datetime-container">
                                <div class="datetime-grid">
                                    <div class="selected-service">
                                        <i class="fa-solid fa-check"></i>
                                        <div class="selected-service" id="selectedService">
                                            <div class="selected-img">
                                                <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionevents.svg" alt="">
                                            </div>
                                            <div>
                                                <h3 id="serviceName">Event Space</h3>
                                                <p id="serviceDescription">Perfect for conferences &amp; events</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-date-time">
                                        <div class="form-group">
                                            <label for="booking-date">Date</label>
                                            <input type="date" id="booking-date" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="duration">Duration</label>
                                            <select id="duration" required>
                                                <option value="">Select duration</option>
                                                <option value="1">1 hour</option>
                                                <option value="2">2 hours</option>
                                                <option value="3">3 hours</option>
                                                <option value="4">4 hours</option>
                                                <option value="8">Full day (8 hours)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="time-slots">
                                    <h3>Available Time Slots :</h3>
                                    <div class="slots-container" id="time-slots">
                                        <!-- Time slots will be generated here -->
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group justify-content-end">
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
                                    <ul>
                                        <li>
                                            <p><i class="fas fa-users"></i> Collaborative Workspace</p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-coffee"></i> Coffee Bar & Lounge</p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-lightbulb"></i> Natural Lighting</p>
                                        </li>
                                    </ul>
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
                                    <ul>
                                        <li>
                                            <p><i class="fas fa-door-closed"></i> Private Offices</p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-wifi"></i> Premium Internet</p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-concierge-bell"></i> Dedicated Support</p>
                                        </li>
                                    </ul>
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
                                    <ul>
                                        <li>
                                            <p><i class="fas fa-chalkboard"></i> Meeting Rooms</p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-projector"></i> Presentation Equipment</p>
                                        </li>
                                        <li>
                                            <p><i class="fas fa-couch"></i> Premium Furniture</p>
                                        </li>
                                    </ul>
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
    <script>
        let currentStep = 1;
        const totalSteps = 4;
        const bookingData = {
            service: null,
            date: null,
            time: null,
            duration: null,
            firstName: null,
            lastName: null,
            email: null,
            phone: null,
            notes: null
        };

        // Predefined booked slots
        const bookedSlots = {
            '2023-10-25': ['10:00', '10:30', '14:00', '14:30', '15:00'],
            '2023-10-26': ['09:00', '09:30', '11:00', '16:00', '16:30'],
            '2023-10-27': ['13:00', '13:30', '14:00', '15:30', '17:00']
        };

        $(document).ready(function() {
            // 📌 Set min date to today
            const today = new Date();
            const yyyy = today.getFullYear();
            const mm = String(today.getMonth() + 1).padStart(2, '0');
            const dd = String(today.getDate()).padStart(2, '0');
            const todayStr = `${yyyy}-${mm}-${dd}`;
            $("#booking-date").attr("min", todayStr).val(todayStr);

            // Generate slots for today
            generateTimeSlots(todayStr);

            // 📌 Service card selection
            $(".service-card").on("click", function() {
                $(".service-card").removeClass("selected");
                $(this).addClass("selected");
                bookingData.service = $(this).data("service");
            });

            // 📌 Date change
            $("#booking-date").on("change", function() {
                generateTimeSlots($(this).val());
            });

            // 📌 Duration change
            $("#duration").on("change", function() {
                if ($(this).val() && $("#booking-date").val()) {
                    generateTimeSlots($("#booking-date").val());
                }
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

                $(".progress-bar").css("--progress", ((step / totalSteps) * 130) + "%");

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

        // 📌 Generate time slots
        function generateTimeSlots(date) {
            const $slotsContainer = $("#time-slots");
            $slotsContainer.empty();

            const duration = parseInt($("#duration").val()); // duration in hours
            if (!duration) {
                $slotsContainer.html("<p>Please select a duration first</p>");
                return;
            }

            // Working hours (8:00 AM to 6:00 PM)
            const startHour = 8;
            const endHour = 18;

            for (let hour = startHour; hour <= endHour; hour++) {
                for (let minute = 0; minute < 60; minute += 30) {
                    let slotTime = `${hour.toString().padStart(2, '0')}:${minute.toString().padStart(2, '0')}`;

                    // Calculate end time based on duration
                    let slotStart = new Date(`1970-01-01T${slotTime}:00`);
                    let slotEnd = new Date(slotStart.getTime() + duration * 60 * 60 * 1000);

                    // Check if end time goes out of working hours
                    if (slotEnd.getHours() > endHour || (slotEnd.getHours() === endHour && slotEnd.getMinutes() > 0)) {
                        continue;
                    }

                    // ✅ Filter by booked slots
                    let isBooked = false;
                    if (bookedSlots[date]) {
                        for (let t = new Date(slotStart); t < slotEnd; t.setMinutes(t.getMinutes() + 30)) {
                            let timeStr = `${t.getHours().toString().padStart(2, '0')}:${t.getMinutes().toString().padStart(2, '0')}`;
                            if (bookedSlots[date].includes(timeStr)) {
                                isBooked = true;
                                break;
                            }
                        }
                    }

                    // ✅ Show slot only if duration is valid and not booked
                    if (!isBooked) {
                        const $slot = $("<div>").addClass("time-slot").text(formatTimeDisplay(slotTime));
                        $slot.on("click", function() {
                            $(".time-slot").removeClass("selected");
                            $(this).addClass("selected");

                            bookingData.time = slotTime;
                            bookingData.date = date;
                            bookingData.duration = duration;
                        });
                        $slotsContainer.append($slot);
                    }
                }
            }

            if ($slotsContainer.children().length === 0) {
                $slotsContainer.html("<p>No available slots for the selected date and duration.</p>");
            }
        }

        // 📌 Helpers
        function formatTimeDisplay(timeString) {
            const [hours, minutes] = timeString.split(":");
            const hourNum = parseInt(hours);
            const period = hourNum >= 12 ? "PM" : "AM";
            const displayHour = hourNum % 12 || 12;
            return `${displayHour}:${minutes} ${period}`;
        }

        function validateStep1() {
            // Date check
            if (!$("#booking-date").val()) {
                alert("Please select a date");
                return false;
            }

            // Duration check
            if (!$("#duration").val()) {
                alert("Please select a duration");
                return false;
            }

            // Time slot check
            if ($(".time-slot.selected").length === 0) {
                alert("Please select a time slot");
                return false;
            }

            // Save data
            bookingData.date = $("#booking-date").val();
            bookingData.duration = $("#duration").val();
            bookingData.time = $(".time-slot.selected").text();

            return true;
        }

        function validateStep2() {
            // check selected location
            let selectedLocation = document.querySelector(".location-card.active");
            if (!selectedLocation) {
                alert("Please select a location");
                return false;
            }

            // save in bookingData
            bookingData.location = selectedLocation.dataset.location;

            return true; // allow next step
        }
        // Add click events to location cards
        document.querySelectorAll(".location-card").forEach(card => {
            card.addEventListener("click", function () {
                // sab cards se active class aur check icon hata do
                document.querySelectorAll(".location-card").forEach(c => {
                    c.classList.remove("active");
                    let oldIcon = c.querySelector(".fa-check-circle");
                    if (oldIcon) oldIcon.remove();
                });

                // clicked card par active class add karo
                this.classList.add("active");

                // direct icon add karo
                let checkIcon = document.createElement("i");
                checkIcon.classList.add("fas", "fa-check-circle", "check-icon");
                this.appendChild(checkIcon);
            });
        });




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

        function updateSummary() {
            $("#summary-service").text($(".service-card.selected h3").text());
            $("#summary-date").text(formatDateDisplay(bookingData.date));
            $("#summary-time").text(formatTimeDisplay(bookingData.time));
            $("#summary-duration").text($("#duration option:selected").text());
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