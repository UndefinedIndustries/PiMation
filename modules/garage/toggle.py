import sys
import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)
i = 21
GPIO.setup(i, GPIO.OUT)
GPIO.output(i, False)
time.sleep(2)
GPIO.output(i, True)
