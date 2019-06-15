#! /bin/sh
set -e

# Exits zero if a device was configured, otherwise non-zero.

cat <<EOF
=== BRAILLE CONFIGURATION ===

Please specify the type of braille device you wish to configure.
See http://access.ubuntu.com/braille for details.
Note that USB devices not connected via a USB serial converter will be
detected automatically, so if you have one of these you can press X.

B - Bluetooth
S - Serial
U - USB serial
X - Exit
EOF
printf "Device type (b/s/u/x): "
read device_type
echo

case "$device_type" in
	[bB]) 
		echo "== Bluetooth device configuration =="
		echo 
		printf "Bluetooth device address: "
		read b_address
		echo 
		echo "Configuring bluetooth braille device on address" \
			"$b_address" 
		/lib/brltty/brltty.sh -b auto -d "bluetooth:$b_address"
		;;
	[sS]) 
		echo "== Serial device configuration =="
		echo