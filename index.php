<?php defined('_JEXEC') or die;
include_once JPATH_THEMES . '/' . $this->template . '/logic.php'; ?>
<!doctype html>
<html lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
</head>

<body class="<?php echo $option
 . ($home ? ' home' . $task : ' site')
 . ' view-' . $view
 . ($layout ? ' layout-' . $layout : ' no-layout')
 . ($task ? ' task-' . $task : ' no-task')
 . ($itemid ? ' itemid-' . $itemid : '')
 . ($pageclass ? ' ' . $pageclass : '');
?>">

    <div class="spinner-wrapper justify-content-center align-items-center">
        <div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
    </div>




    <jdoc:include type="modules" name="debug" />
    <script src="<?php echo $tpath . '/assets/dist/js/main.bundle.js'; ?>"></script>
</body>

</html>
