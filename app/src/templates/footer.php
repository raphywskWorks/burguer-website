<footer>
    <span>Footer</span>
</footer>

<script type="text/javascript" src="../../assets/js/scripts.js"></script>

<?php if ( isset($args['scripts']) ): ?>


    <?php foreach($args['scripts'] as $key => $script): ?>

        <script type="text/javascript" src="../../assets/js/<?= $script . '.js'  ?>"></script>

    <?php endforeach; ?>

<?php endif; ?>

</body>
</html>
