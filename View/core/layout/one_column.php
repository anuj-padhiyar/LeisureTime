<html>
	<head>
        <?php echo $this->getHeader()->toHtml();?>
	</head>
	<body>
		<table cellpadding="0" cellspacing="0" width="100%">
			<tbody>
                <tr>
                    <td style = 'text-align:center' width = "100%">
                        <?php
                            echo $this->createBlock('Core\Layout\Message')->toHtml();
                            echo $this->getContent()->toHtml();
                        ?>
                    </td>
                </tr>
                <tr>
                    <td style = 'text-align:center' height="100px" colspan = "3">
                        <?php echo $this->getFooter()->toHtml(); ?>
                    </td>
                </tr>
		    </tbody>
		</table>
	</body>
</html>