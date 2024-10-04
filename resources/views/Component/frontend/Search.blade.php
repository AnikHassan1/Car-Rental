<!-- Search Box Banner Section -->
<div class="search-box-banner py-4">
    <div class="container">
        <form action="listing-grid.html">
            <div class="row align-items-end">
                <!-- Pickup Location -->
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="input-block">
                        <label class="form-label">Pickup Location</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter City, Airport, or Address">
                            <span class="input-group-text"><i class="feather-map-pin"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Pickup Date and Time -->
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="input-block">
                        <label class="form-label">Pickup Date & Time</label>
                        <div class="input-group">
                            <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                            <span class="input-group-text"><i class="feather-calendar"></i></span>
                        </div>
                        <div class="input-group mt-2">
                            <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                            <span class="input-group-text"><i class="feather-clock"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Return Date and Time -->
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="input-block">
                        <label class="form-label">Return Date & Time</label>
                        <div class="input-group">
                            <input type="text" class="form-control datetimepicker" placeholder="04/11/2023">
                            <span class="input-group-text"><i class="feather-calendar"></i></span>
                        </div>
                        <div class="input-group mt-2">
                            <input type="text" class="form-control timepicker" placeholder="11:00 AM">
                            <span class="input-group-text"><i class="feather-clock"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Search Button -->
                <div class="col-lg-3 col-md-6 text-center">
                    <button class="btn btn-primary w-100 search-button" type="submit">
                        <i class="fa fa-search" aria-hidden="true"></i> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
/* Search Box Styling */
.search-box-banner {
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}

/* Input Block Styles */
.input-block .form-label {
    font-weight: bold;
    color: #343a40;
}

.input-group {
    position: relative;
}

.input-group .form-control {
    padding: 10px 15px;
    border-radius: 5px;
}

.input-group .input-group-text {
    background-color: #fff;
    border: 1px solid #ced4da;
    border-left: 0;
    border-radius: 0 5px 5px 0;
    padding: 10px 15px;
    font-size: 1.2rem;
}

.input-group .input-group-text i {
    color: #007bff;
}

/* Search Button */
.search-button {
    padding: 10px 30px;
    font-size: 1.2rem;
    font-weight: bold;
    border-radius: 5px;
    transition: all 0.3s ease;
}

.search-button:hover {
    background-color: #0056b3;
    border-color: #0056b3;
    box-shadow: 0 5px 10px rgba(0, 123, 255, 0.3);
}

/* Responsive Adjustments */
@media (max-width: 991px) {
    .search-box-banner {
        padding: 15px;
    }

    .input-group .form-control, .input-group .input-group-text {
        font-size: 0.9rem;
        padding: 8px 12px;
    }

    .search-button {
        font-size: 1rem;
    }
}
</style>
