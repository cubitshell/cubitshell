INSERT INTO eleComp(id ,nombre, infoid, idCaract, imagen, precioPublico, precioTienda) 
VALUES 
(null,"STMicroelectronics BlueNRG-2 Bluetooth® Low Energy Wireless System-on-Chip",1,1,'http://localhost/cubitshell/img/componentes/BLUENRG-2.jpg','80','50'	),
(null,"Texas Instruments TMP116/TMP116N Digital Temperature Sensors",2,2,'http://localhost/cubitshell/img/componentes/TI_TMP116.jpg','46','30'	),
(null,"Intel SSDPED1K375GAQ1",'3','3','http://localhost/cubitshell/img/componentes/OptaneSSDDCP4800X_t.jpg','2300','2000'	),
(null," Microchip Technology 23LCV512 / 23LCV1024 Serial SRAM  ",4,4,'http://localhost/cubitshell/img/componentes/SOIC_8_t.jpg','53','20'	),
(null,"NXP PCF85263A Tiny Real-Time Clock/Calendar",5,5,'http://localhost/cubitshell/img/componentes/NXP_PCF8563A.jpg','170','80'	);

INSERT INTO infoComp(id, info) VALUES
 (1,'STMicroelectronics BlueNRG-2 Bluetooth® Low Energy Wireless System-on-Chip offers the same RF performance of the BlueNRG radio, but improves sleep mode current consumption for longer application battery lifetime. The BlueNRG-2 extends the features of award-winning BlueNRG network processor, enabling the usage of the embedded Cortex-M0 for running the user application code. '),
 (1,'The SoC includes 256KB of programming Flash memory, 24KB of static RAM memory with retention (two 12KB banks) and SPI, UART, I2C standard communication interface peripherals. The BlueNRG-2 also features multifunction timers, watchdog, RTC and DMA controller. The chip has an integrated high efficiency DC/DC converter for ultra-low power characteristics. '),
 (2,'Texas Instruments TMP116/TMP116N Digital Temperature Sensors are low-power, high-precision temperature sensors with integrated EEPROM memory. The TMP116 provides a 16-bit temperature result with a resolution of 0.0078°C and an accuracy of up to ±0.2°C with no calibration. The device is I2C and SMBus interface compatible, has programmable alert functionality, and can support up to four devices on a single bus. The TMP116 consumes minimal current that, in addition to providing power savings, minimizes self-heating and improves measurement accuracy. The TMP116 operates from 1.9V to 5.5V and typically consumes 3.5µA. Across the device operating temperature range of –55°C to +125°C, the TMP116 exceeds the accuracy of a Class A RTD, while consuming less than one fifth of the typical excitation current for a PT100 RTD. The TMP116 is easier to use than RTDs, eliminating the need for calibration, external circuitry, matched traces, and Kelvin connections.'),
 (3,'La serie Intel® Optane ™ SSD DC P4800X resuelve los exigentes desafíos de almacenamiento y memoria con una combinación de baja latencia, ultra resistencia, alta calidad de servicio y alto rendimiento. La serie P4800X es la SSD de centro de datos más sensible construida con los nuevos y revolucionarios medios de memoria 3D XPoint ™. El SSD DC P4800X es el primero en combinar los atributos de memoria y almacenamiento. Esta solución innovadora está optimizada para superar los cuellos de botella de almacenamiento al proporcionar un nuevo nivel de datos. El P4800X acelera las aplicaciones para almacenamiento en caché y almacenamiento rápido, aumenta la escala por servidor y reduce los costos de transacción para cargas de trabajo sensibles a la latencia. Además, los centros de datos ahora también pueden implementar conjuntos de datos más grandes y más asequibles para obtener nuevas perspectivas de grandes grupos de memoria.'),
 (4,'Microchip 23LCV512 and 23LCV1024 are 512Kb and 1Mb Serial SRAM devices accessed via a simple SPI compatible serial bus. These Microchip SRAM devices support unlimited reads and writes to the memory array and support data backup via external battery/coin cell connected to VBAT. The bus signals required are a clock input plus separate data in and data out lines. Access to the device is controlled through a Chip Select input. Additionally, SDI (Serial Dual Interface) is supported if an application needs faster data rates.'),
 (5,'\'s PCF85263A Tiny Real-Time Clock/Calendar is a CMOS Real-Time Clock (RTC) and calendar optimized for low power consumption and with automatic switching to battery on main power loss. The RTC can also be configured as a stop-watch (elapsed time counter). Three time log registers triggered from battery switch-over as well as input driven events. Featuring clock output and two independent interrupt signals, two alarms, I2C interface and quartz crystal calibration. Typical applications include printers, copiers, electronic metering, digital cameras, white goods, elapsed time counter, network powered devices, battery backed up systems, data loggers, digital voice recorders, mobile equipment, and accurate high duration timer.');
 INSERT INTO espeComp(id, especificacion) VALUES 
 (1,'Bluetooth low energy single mode system-on-chip compliant with Bluetooth 4.2 specification:<br>master, slave and multiplesimultaneous roles<br> LE Data Packet Length Extension'),
 (1,'Operating supply voltage: from 1.7 to 3.6V'),
 (1,'Integrated linear regulator and DC-DC step-down converter'),
 (1,'Operating temperature range: -40°C to 105°C'),
 (1,'High performance, ultra-low power Cortex-M0 32-bit based architecture core'),
 (1,'Programmable 256KB Flash'),
 (1,'24KB RAM with retention (two 12KB banks)'),
 (1,'Suitable for building applications compliantwith the following radio frequencyregulations: ETSI EN 300 328, EN 300 440,FCC CFR47 Part 15, ARIB STD-T66'),
 (1,'Pre-programmed bootloader via UART'),
 (1,'QFN32, QFN48 and WCSP34 packageoptions'),
 (2,'TMP116 Accuracy Without Calibration<br>    ±0.2°C (max) From –10°C to +85°C<br>    ±0.25°C (max) From –40°C to +105°C <br>    ±0.3°C (max) From +105°C to +125°C'),
 (2,'TMP116N Accuracy Without Calibration <br>±0.3°C (max) From –25°C to +85°C<br>±0.4°C (max) From –40°C to +125°C'),
 (2,'Supply Range: 1.9V to 5.5V'),
 (2,'Resolution: 16 Bits at 0.0078°C (1 LSB)'),
 (2,'Programmable Temperature Alert Limits'),
 (2,'General-Purpose EEPROM: 64 Bits'),
 (2,'SMBus™, I2C Interface Compatibility'),
 (3,'Solid State Drives - SSD'),
 (3,'375 GB'),
 (3,'Add-In Cards'),
 (3,'CONFIGURATION: TLC'),
 (3,'Brand: 	Intel'),
(4,'Product Category: 	SRAM Memory 	'),
(4,'Manufacturer: 	Microchip 	'),
(4,'RoHS: 	RoHS Compliant Details 	'),
(4,'Memory Size: 	1 Mbit 	'),
(4,'Organisation: 	128 k x 8 	'),
(4,'Access Time: 	- 	'),
(4,'Maximum Clock Frequency: 	20 MHz 	'),
(4,'Interface Type: 	Serial, 4-Wire, SDI, SPI 	'),
(4,'Supply Voltage - Max: 	5.5 V 	'),
(4,'Supply Voltage - Min: 	2.5 V 	'),
(4,'Supply Current - Max: 	10 mA 	'),
(4,'Minimum Operating Temperature: 	- 40 C 	'),
(4,'Maximum Operating Temperature: 	+ 85 C 	'),
(4,'Mounting Style: 	SMD/SMT 	'),
(4,'Package/Case: 	SOIC-8 	'),
(4,'Packaging: 	Tube 	'),
(4,'Brand: 	Microchip Technology 	'),
(4,'Memory Type: 	SDR 	'),
(4,'Moisture Sensitive: 	Yes 	'),
(4,'Operating Temperature Range: 	- 40 C to + 85 C 	'),
(4,'Series: 	23LCV1024 	'),
(4,'Factory Pack Quantity: 	100 	'),
(4,'Type: 	Synchronous 	'),
(4,'Unit Weight: 	540 mg'),
    (5,'UL Recognized Component'),
    (5,'Provides year, month, day, weekday, hours, minutes, seconds and 100th seconds based on a 32.768kHz quartz crystal'),
    (5,'Stop-watch mode for elapsed time counting. From 100th seconds to 999999 hours'),
    (5,'Two independent alarms'),
    (5,'Battery back-up circuit'),
    (5,'WatchDog timer'),
    (5,'Three timestamp registers'),
    (5,'Two independent interrupt generators plus predefined interrupts at every second, minute, or hour'),
    (5,'Frequency adjustment via programmable offset register'),
    (5,'Clock operating voltage: 0.9V to 5.5V'),
    (5,'Low current; typical 0.28µA at VDD = 3.0V and Tamb = 25ºC'),
    (5,'400kHz two-line I2C-bus interface (at VDD = 1.8V to 5.5V)'),
    (5,'Programmable clock output for peripheral devices (32.768kHz, 16.384kHz, 8.192kHz, 4.096kHz, 2.048kHz, 1.024kHz, and 1Hz)'),
    (5,'Configurable oscillator circuit for a wide variety of quartzes: CL = 6pF, CL = 7pF, and CL = 12.5pF');
