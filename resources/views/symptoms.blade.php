@include('includes.header')
@include('includes.navigation')
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-custom alert-has-icon">
                            <div class="alert-icon"><i class="fas fa-info-circle"></i></div>
                            <div class="alert-body">
                                <div class="alert-title">
                                    If you develop a fever, cough, and have difficulty breathing, promptly seek medical care.
                                    Call in advance and tell your health provider as soon as possible for medical advice.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h3>Symptoms of Coronavirus</h3>
                    </div>
                    <div class="card-body">
                        <p>
                            The most common symptoms of COVID-19 are <strong>fever, tiredness, and dry cough</strong>. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. Also the <strong>symptoms may appear 2-14 days</strong> after exposure.
                        </p>

                        <h5 class="text-muted">Major Common Symptoms</h5>
                        <div class="support-ticket media pb-1 mb-3 mt-3">

                            <img src="https://dashlite.themenio.com/images/gfx/covid-symptom-fever.png" class="user full-round-image" alt="">

                            <div class="media-body ml-3">
                                <span class="font-weight-bold">Fever</span>
                                <p class="my-1">
                                    <strong>High Fever</strong> – this means you feel hot to touch on your chest or back (you do not need to measure your temperature). It is a common sign & also may appear in 2-10 days if affected.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </section>

</div> <!-- Main Content -->
@include('includes.footer')

<style>
    .support-ticket .user-img {
        width: 74px;
        box-shadow: 9px 9px 16px rgba(163,177,198,0.6), -9px -9px 16px rgba(255,255,255, 0.7);
    }
    .card .card-header h4 {
        font-size: 17px;
        line-height: 28px;
        padding-right: 10px;
        margin-bottom: 0;
        color: #212529;
        width: 60%;
    }

    .main-footer {
        padding: 20px 30px 20px 28px !important;
        color: #98a6ad;
        border-top: 1px solid #e3eaef;
        display: inline-block;
        background: #e0e5ec;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 8px;
        font-size: 11px;
        width: calc(100% - 121px);
        float: right;
        margin: 31px;
        box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255,255,255, 0.7);
    }

    .light-sidebar .main-sidebar .sidebar-menu li.active a {
        background-color: #e0e5ec;
        box-shadow: inset -5px -5px 8px rgba(163,177,198,0.6), inset 5px 5px 8px rgba(255,255,255, 0.7);
    }

    .navbar.navbar-expand-lg.main-navbar {
        margin-left: 26px;
        margin-top: 18px;
        margin-right: 30px;
        border-radius: 8px;
    }

    .card-footer.padding-0 {
        padding: 0 !important;
    }

    .alert-custom {
        background-color: #e0e5ec;
        border-radius: 14px;
        box-shadow: inset -6px -6px 12px rgba(255,255,255, 0.7), inset 6px 6px 12px rgba(163,177,198,0.6);
    }

    .fas.fa-info-circle {
        font-size: 36px !important;
        color: #f45c50;
    }
    .alert.alert-has-icon .alert-icon {
        width: 60px;
    }
    .alert .alert-title {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 5px;
        color: #f45c50;
    }
    .full-round-image{
        border-radius: 50%;
        width: 74px;
    }
</style>
