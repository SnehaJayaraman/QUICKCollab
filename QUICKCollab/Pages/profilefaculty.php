<b>First Name :</b> <?php echo htmlspecialchars($_SESSION['firstname']); ?><br>
                            <b>Last Name : </b><?php echo htmlspecialchars($_SESSION['lastname']); ?><br>
                            <b>Employee ID:</b><?php echo htmlspecialchars($_SESSION['SRN']) ?><br>
                            <b>Email ID : </b><?php echo htmlspecialchars($_SESSION['Email']) ?><br>
                            <b>Phone Number : </b><?php echo htmlspecialchars($_SESSION['PhoneNo']) ?><br>
                            
                            
							<ul >
								<li><b>Areas Of Interest</b></li>
								<?php foreach(explode(',', $_SESSION['aoi']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
							<ul >
								<li><b>Areas Of Expertise</b></li>
								<?php foreach(explode(',', $_SESSION['aoe']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
                            </ul>