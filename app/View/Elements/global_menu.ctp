<div class="navbar-wrapper header <?php echo $debugMode;?>">
	<div class="navbar navbar-inverse">
		<div class="navbar-inner">
		<?php if ($me != false ):?>
			<div class="nav-collapse collapse">
				<ul class="nav">
					<li class="active"><a href="/">Home
					</a></li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Event Actions
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/events/index">List Events</a></li>
							<?php if ($isAclAdd): ?>
							<li><a href="/events/add">Add Event</a></li>
							<?php endif; ?>
							<li class="divider"></li>
							<li><a href="/attributes/index">List Attributes</a></li>
							<li><a href="/attributes/search">Search Attributes</a></li>
							<li class="divider"></li>
							<li><a href="/shadow_attributes/index">View Proposals</a></li>
							<li class="divider"></li>
							<li><a href="/events/export">Export</a></li>
							<?php if ($isAclAuth): ?>
							<li><a href="/events/automation">Automation</a></li>
							<?php endif;?>

						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Input Filters
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<?php if ($isSiteAdmin): ?>
							<li><a href="/admin/regexp/index">Import Regexp</a></li>
							<li><a href="/admin/whitelists/index">Signature Whitelist</a></li>
							<?php endif;?>
							<?php if (!$isSiteAdmin): ?>
							<li><a href="/regexp/index">Import Regexp</a></li>
							<li><a href="/whitelists/index">Signature Whitelist</a></li>
							<?php endif;?>
						</ul>
					</li>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Global Actions
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/users/news">News</a></li>
							<li><a href="/users/view/me">My Profile</a></li>
							<li><a href="/users/memberslist">Members List</a></li>
							<li><a href="/pages/display/doc/quickstart">User Guide</a></li>
							<li><a href="/users/terms">Terms &amp; Conditions</a></li>
							<li class="divider"></li>
							<li><a href="/users/logout">Log out</a></li>
						</ul>
					</li>

					<?php if (('true' == Configure::read('CyDefSIG.sync')) && ($isAclSync || $isAdmin)): ?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Sync Actions
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/servers/index">List Servers</a></li>
						</ul>
					</li>
					<?php endif;?>

					<?php if($isAdmin || $isSiteAdmin): ?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Administration
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/admin/users/add">New User</a></li>
							<li><a href="/admin/users/index">List Users</a></li>
							<li class="divider"></li>
							<?php if($isSiteAdmin): ?>
							<li><a href="/admin/roles/add">New Role</a></li>
							<?php endif; ?>
							<li><a href="/admin/roles/index">List Roles</a></li>
							<?php if($isSiteAdmin): ?>
							<li class="divider"></li>
							<li><a href="/admin/users/email">Contact Users</a></li>
							<li class="divider"></li>
							<li><a href="/pages/display/administration">Administrative tools</a></li>
							<?php endif; ?>
						</ul>
					</li>
					<?php endif; ?>

					<?php if($isAclAudit): ?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Audit
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="/admin/logs/index">List Logs</a></li>
							<li><a href="/admin/logs/search">Search Logs</a></li>
						</ul>
					</li>
					<?php endif;?>

				</ul>
			</div>
			<div class="nav-collapse collapse pull-right">
				<ul class="nav">
					<li><a href="/users/logout">Log out</a></li>
				</ul>
			</div>

			<div class="nav-collapse collapse pull-right" style="margin-top:10px">
				<div class="nav" style="font-weight:bold">
					<span class="logoBlue">MWAnalysis - Malware Analysis Platform @ <a href="http://www1.informatik.uni-erlangen.de">FAU</a></span>
				</div>
			</div>
		<?php endif;?>
		</div>
	</div>
</div>
