<?php

include 'includes/header.php';

$title = $minSalary = $maxSalary = '';
$type = $experience = -1;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $status = TRUE;
    $filter = [];

    if (!empty($_POST['title'])) {
        $title = cdata($_POST['title']);

        if ($title != '') {
            array_push($filter, [
                'name' => 'title',
                'value' => $title
            ]);
        }
    }


    if (!empty($_POST['minsalary'])) {
        $minSalary = cdata($_POST['minsalary']);

        if ($minSalary != 0 || $minSalary == NULL) {
            array_push($filter, [
                'name' => 'minsalary',
                'value' => $minSalary
            ]);
        }
    }

    if (!empty($_POST['maxsalary'])) {
        $maxSalary = cdata($_POST['maxsalary']);

        if ($maxSalary != 0 || $maxSalary == NULL) {
            array_push($filter, [
                'name' => 'maxsalary',
                'value' => $maxSalary
            ]);
        }
    }

    if (!empty($_POST['type'])) {
        $type = cdata($_POST['type']);

        if ($type  != -1) {
            array_push($filter, [
                'name' => 'type',
                'value' => $type
            ]);
        }
    } else {
        $status = FALSE;
    }

    if (!empty($_POST['experience'])) {
        $experience = cdata($_POST['experience']);

        if ($experience != -1) {
            array_push($filter, [
                'name' => 'experience',
                'value' => $experience
            ]);
        }
    } else {
        $status = FALSE;
    }


    if ($status) {
        $query = 'SELECT * FROM jobs Where language=:lang';
        $params = [':lang' => $language];

        for ($i = 0; $i < count($filter); $i++) {
            $paramName = ':' . $filter[$i]['name'];
            $query .= ' And ' . $filter[$i]['name'] . '=' . $paramName;
            $params[$paramName] = $filter[$i]['value'];
        }

        $jobs = $database->query($query, $params);
    }
}

if (!isset($jobs) && !isset($status)) {
    $jobs = $database->query('SELECT * From jobs Where language=:lang', [
        ':lang' => $language
    ]);
}

$typies = $database->query('SELECT * FROM type Where language=:lang', [
    ':lang' => $language
]);
$experience = 5;

?>

<div class="container my-5 text-center">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="mb-3 d-flex flex-column justify-content-start">
                    <label for="Title" class="form-label text-start">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Search For Title"
                        value="<?php echo $title; ?>" />
                </div>
            </div>
            <div class="col-12 col-lg-2">
                <div class="mb-3 d-flex flex-column justify-content-start">
                    <label for="Title" class="form-label text-start">Salary</label>
                    <div class="d-flex">
                        <input type="text" class="form-control me-1" name="minsalary" placeholder="Min"
                            value="<?php echo $minSalary; ?>" />
                        <input type="text" class="form-control" name="maxsalary" placeholder="Max"
                            value="<?php echo $maxSalary; ?>" />
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="mb-3 d-flex flex-column justify-content-start">
                    <label for="Type" class="form-label text-start">Type</label>
                    <select class="form-select" aria-label="Default select" name="type">
                        <option value="-1" <?php if ($type == -1) echo 'selected' ?>>All</option>
                        <?php for ($i = 0; $i < count($typies); $i++) { ?>
                        <option value="<?php echo $typies[$i]['id']; ?>" <?php if ($type == $i) echo 'selected' ?>>
                            <?php echo $typies[$i]['name']; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <div class="mb-3 d-flex flex-column justify-content-start">
                    <label for="Experiences" class="form-label text-start">Experiences</label>
                    <select class="form-select" aria-label="Default select" name="experience">
                        <option value="-1" <?php if ($experience == -1) echo 'selected' ?>>All</option>
                        <?php for ($i = 0; $i < $experience; $i++) { ?>
                        <option value="<?php echo $i; ?>" <?php if ($experience == $i) echo 'selected' ?>>
                            <?php echo $i; ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-6 col-lg-2 d-flex justify-items-center align-items-center">
                <button class="btn button">Search</button>
            </div>

        </div>
    </form>
    <?php include 'includes/getJobs.php'; ?>
</div>
<?php include 'includes/footer.php'; ?>