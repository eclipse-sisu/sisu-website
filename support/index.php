<?php $pageTitle = "Support"; require_once ('../_projectCommon.php');
/**
 * Copyright (c) 2015-present Eclipse Foundation and others.
 *
 * This program and the accompanying materials are made
 * available under the terms of the Eclipse Public License 2.0
 * which is available at https://www.eclipse.org/legal/epl-2.0/
 *
 * Contributors:
 *   Stuart McCulloch - Custom content for Sisu
 *
 * SPDX-License-Identifier: EPL-2.0
 */
ob_start();
?>

<div id="midcolumn">

<h3 id="mail">Mailing Lists</h3>
<p>
  If you have a question about using Sisu that the existing documentation does not answer, we'd like to hear from you on
  the <a href="http://dev.eclipse.org/mailman/listinfo/sisu-users/">user mailing list</a>. Questions about the internal
  design of Sisu should be directed to the <a href="http://dev.eclipse.org/mailman/listinfo/sisu-dev/">developer mailing list</a>.
</p>
<p>
  Before posting your question, please search the
  <a href="http://dev.eclipse.org/mhonarc/lists/sisu-users/">user</a>
  or <a href="http://dev.eclipse.org/mhonarc/lists/sisu-dev/">developer</a>
  archives in case your question has been brought up before and was already answered.
</p>

<h3 id="bugs">Issue Tracker</h3>
<p>
  If you encounter a bug or have a feature request, please open a sufficiently detailed issue over at 
  <a href="https://github.com/eclipse/sisu.inject/issues">GitHub</a>.
  We especially appreciate reports that come with suggested patches or enough information to be recreated locally.
</p>

</div>

<?php
$html = ob_get_clean();
$Theme->setHtml($html);
$Theme->generatePage();
?>
