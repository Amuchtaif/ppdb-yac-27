<?php
/**
 * Particles Background Component
 * Integration from React Bits (OGL WebGL Particles)
 * 
 * @var string|null $id
 * @var string|null $class
 */
$id = $id ?? 'particles-bg';
$class = $class ?? '';
?>
<div id="<?= htmlspecialchars($id) ?>" data-particles class="particles-container <?= htmlspecialchars($class) ?>" aria-hidden="true"></div>
