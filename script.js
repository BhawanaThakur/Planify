// Daily Form
const dailyForm = document.getElementById("daily-form");
if (dailyForm) {
    dailyForm.addEventListener("submit", function () {
        alert("Daily task saved!");
    });
}

// Weekly Planner
const weeklyForm = document.querySelector("form[action='save_weekly.php']");
if (weeklyForm) {
    weeklyForm.addEventListener("submit", function () {
        alert("Weekly Plan Saved Successfully!");
    });
}

// Monthly Planner
const monthlyForm = document.querySelector("form[action='save_monthly.php']");
if (monthlyForm) {
    monthlyForm.addEventListener("submit", function () {
        alert("Monthly data saved!");
    });
}

// Goals Page
const goalsForm = document.querySelector("form[action='save_goals.php']");
if (goalsForm) {
    goalsForm.addEventListener("submit", function () {
        alert("Your goals have been saved!");
    });
}

// Habit Tracker
const habitsForm = document.querySelector("form[action='save_habits.php']");
if (habitsForm) {
    habitsForm.addEventListener("submit", function () {
        alert("Habit tracker updated!");
    });
}

// Profile Page
const profileForm = document.getElementById("profile-form");
if (profileForm) {
    profileForm.addEventListener("submit", function () {
        alert("Profile updated successfully!");
    });
}


function autoSave(id) {
    const field = document.getElementById(id);
    if (!field) return;

    field.value = localStorage.getItem(id) || "";

    field.addEventListener("input", () => {
        localStorage.setItem(id, field.value);
    });
}

['task', 'username', 'email', 'bio'].forEach(autoSave);
