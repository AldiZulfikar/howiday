{{-- JQUERY --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
</script>


{{-- TOGGLER SCRIPT --}}
<script>
    $(document).ready(function() {
        $(".nav-toggler").each(function(_, navToggler) {
            var target = $(navToggler).data("target");
            $(navToggler).on("click", function() {
                $(target).animate({
                    height: "toggle",
                });
            });
        });
    });
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>


<script>
    const MONTH_NAMES = [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ];
    const MONTH_SHORT_NAMES = [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
    ];
    const DAYS = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    function app() {
        return {
            showDatepicker: false,
            datepickerValue: "",
            selectedDate: "",
            dateFormat: "YYYY-MM-DD",
            month: "",
            year: "",
            no_of_days: [],
            blankdays: [],
            initDate(newDate) {
                let today;
                if (newDate) {
                    this.selectedDate = newDate;
                    console.log(newDate)
                }
                if (this.selectedDate) {
                    today = new Date(Date.parse(this.selectedDate));
                } else {
                    today = new Date();
                }
                this.month = today.getMonth();
                this.year = today.getFullYear();
                this.datepickerValue = this.formatDateForDisplay(
                    today
                );
            },
            formatDateForDisplay(date) {
                let formattedDay = DAYS[date.getDay()];
                let formattedDate = ("0" + date.getDate()).slice(
                    -2
                ); // appends 0 (zero) in single digit date
                let formattedMonth = MONTH_NAMES[date.getMonth()];
                let formattedMonthShortName =
                    MONTH_SHORT_NAMES[date.getMonth()];
                let formattedMonthInNumber = (
                    "0" +
                    (parseInt(date.getMonth()) + 1)
                ).slice(-2);
                let formattedYear = date.getFullYear();
                if (this.dateFormat === "DD-MM-YYYY") {
                    return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`; // 02-04-2021
                }
                if (this.dateFormat === "YYYY-MM-DD") {
                    return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`; // 2021-04-02
                }
                if (this.dateFormat === "D d M, Y") {
                    return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`; // Tue 02 Mar 2021
                }
                return `${formattedDay} ${formattedDate} ${formattedMonth} ${formattedYear}`;
            },
            isSelectedDate(date) {
                const d = new Date(this.year, this.month, date);
                return this.datepickerValue ===
                    this.formatDateForDisplay(d) ?
                    true :
                    false;
            },
            isToday(date) {
                const today = new Date();
                const d = new Date(this.year, this.month, date);
                return today.toDateString() === d.toDateString() ?
                    true :
                    false;
            },
            getDateValue(date) {
                let selectedDate = new Date(
                    this.year,
                    this.month,
                    date
                );
                this.datepickerValue = this.formatDateForDisplay(
                    selectedDate
                );
                // this.$refs.date.value = selectedDate.getFullYear() + "-" + ('0' + formattedMonthInNumber).slice(-2) + "-" + ('0' + selectedDate.getDate()).slice(-2);
                this.isSelectedDate(date);
                this.showDatepicker = false;
            },
            getNoOfDays() {
                let daysInMonth = new Date(
                    this.year,
                    this.month + 1,
                    0
                ).getDate();
                // find where to start calendar day of week
                let dayOfWeek = new Date(
                    this.year,
                    this.month
                ).getDay();
                let blankdaysArray = [];
                for (var i = 1; i <= dayOfWeek; i++) {
                    blankdaysArray.push(i);
                }
                let daysArray = [];
                for (var i = 1; i <= daysInMonth; i++) {
                    daysArray.push(i);
                }
                this.blankdays = blankdaysArray;
                this.no_of_days = daysArray;
            },
        };
    }
</script>


<script>
    const chk = document.getElementById('chk');

    chk.addEventListener('change', () => {
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.toggle('dark')
            // localStorage.setItem('chk', 'dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    });
</script>

<script>
    $('*').toggleClass(localStorage.toggled);

    function darkLight() {
        /*DARK CLASS*/
        if (localStorage.toggled != 'dark') {
            $('*, p').toggleClass('dark', true);
            localStorage.toggled = "dark";

        } else {
            $('*, p').toggleClass('dark', false);
            localStorage.toggled = "";
        }
    }

    /*Add 'checked' property to input if background == dark*/
    if ($('main').hasClass('dark')) {
        $('#checkBox').prop("checked", true)
    } else {
        $('#checkBox').prop("checked", false)
    }
</script>
