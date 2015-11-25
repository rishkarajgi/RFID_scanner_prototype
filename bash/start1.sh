#!/bin/sh

sudo ./utils/librfid-tool -s
python update.py
rm file.txt